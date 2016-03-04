<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Common {

    //public $template = '/pages/user/page';

    public function action_index()
    {
        $this->template->content = View::factory('/pages/user/info')->bind('user', $user);

        // Load the user information
        $user = Auth::instance()->get_user();

        // if a user is not logged in, redirect to login page
        if (!$user)
        {
            Request::current()->redirect('/pages/user/login');
        }
    }

    public function action_create()
    {
        $this->template->content = View::factory('/pages/user/create')
                                         ->bind('errors', $errors)
                                         ->bind('message', $message);

        if (HTTP_Request::POST == $this->request->method())
        {
            try
            {

                // Create the user using form values
                $user = ORM::factory('user')
                    ->create_user($this->request->post(), array('username', 'password', 'email','profession','tell'));

                // Grant user login role
                $user->add('roles', ORM::factory('role', array('name' => 'login')));

                // Reset values so form is not sticky
                $_POST = array();

                Session::instance()->set('auth', $user->username);
                 Request::current()->redirect('/');
                // Set success message
                //$message = "Логин  '{$user->username}' успешно добавлен в базу.Спасибо за регистрацию!";

            } catch (ORM_Validation_Exception $e)
            {
                // Set failure message
                $message = 'Возникли ошибки, пожалуйста, исправьте их.';

                // Set errors using custom messages
                $errors = $e->errors('models');
            }
        }
    }

    public function action_login()
    {
        $this->template->content = View::factory('/pages/user/login')->bind('message', $message);

        if (HTTP_Request::POST == $this->request->method())
        {
            // Attempt to login user
            $remember = array_key_exists('remember', $this->request->post()) ? (bool)$this->request->post('remember') : FALSE;
            $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);

            // If successful, redirect user
            if ($user)
            {
                Session::instance()->set('auth', $this->request->post('username'));
                Request::current()->redirect('/');
            }
            else
            {
                $message = 'Неверный логин или пароль';
            }
        }
    }

    public function action_logout()
    {
        // Log user out
        $session = Session::instance();
        $session->delete('auth');
     // Redirect to login page
        Request::current()->redirect('/');
    }

    /**
     * A basic implementation of the "Forgot password" functionality
     */
    public function action_forgot()
    {
        $message = '';

        if (isset($_POST['reset_email']))
        {
            $user = ORM::factory('user')->where('email', '=', $_POST['reset_email'])->find();

            // admin passwords cannot be reset by email
            if (is_numeric($user->id) && ($user->username != 'admin'))
            {
                // send an email with the account reset token
                $user->reset_token = $user->generate_password(32);
                $user->save();

                $message = "Вы сделали запрос на восстановление пароля. Вы можете получить новый пароль по этой ссылке:\n\n" .
                            ":reset_token_link\n\n" . "Если ссылка не кликабельна, пожалуйста, перейдите на следующую страницу:\n" .
                            ":reset_link\n\n" . "и введите эти данные: Reset Token: :reset_token\nВаш логин: :username\n";
                $mailer = Email::connect();
                // Create complex Swift_Message object stored in $message
                // MUST PASS ALL PARAMS AS REFS
                $subject = __('Account password reset');
                $to = $_POST['reset_email'];
                $from = 'noreply@elegantno.org';
                $body = __($message, array(':reset_token_link' => URL::site('user/reset?reset_token=' . $user->reset_token . '&reset_email=' . $_POST['reset_email'], TRUE), ':reset_link' => URL::site('user/reset', TRUE), ':reset_token' => $user->reset_token, ':username' => $user->username));
                // FIXME: Test if Swift_Message has been found.
                $message_swift = Swift_Message::newInstance($subject, $body)->setFrom($from)->setTo($to);
                if ($mailer->send($message_swift))
                {
                    $message = 'Письмо для измененения пароля отправлено на ваш email.';
                }
                else
                {
                    $message = 'Could not send email.';
                }
            }
            else
            {
                if ($user->username == 'admin')
                {
                    $message = 'Admin account password cannot be reset via email.';
                }
                else
                {
                    $message = 'User account could not be found.';
                }
            }
        }

        $this->template->content = View::factory('/pages/user/forgot')->bind('message', $message);
    }

    /**
     * A basic version of "reset password" functionality.
     */
    public function action_reset()
    {
        if (isset($_REQUEST['reset_token']) && isset($_REQUEST['reset_email']))
        {
            // make sure that the reset_token has exactly 32 characters (not doing that would allow resets with token length 0)
            if ((strlen($_REQUEST['reset_token']) == 32) && (strlen(trim($_REQUEST['reset_email'])) > 1))
            {
                $user = ORM::factory('user')->where('email', '=', $_REQUEST['reset_email'])->and_where('reset_token', '=', $_REQUEST['reset_token'])->find();

                if (is_numeric($user->id) && ($user->reset_token == $_REQUEST['reset_token']))
                {
                    $password = $user->generate_password();
                    $user->password = $password;

                    $user->save();

                    $message = "Ваш новый пароль:\n\n" . ":password\n\n" . "Вы можете войти здесь: " . ":link\n\n";

                    $mailer = Email::connect();
                    // Create complex Swift_Message object stored in $message
                    // MUST PASS ALL PARAMS AS REFS
                    $subject = __('Account password reset');
                    $to = $_REQUEST['reset_email'];
                    $from = 'noreply@elegantno.org';
                    $body = __($message, array(':link' => URL::site('user/login', TRUE), ':password' => $password));

                    // FIXME: Test if Swift_Message has been found.
                    $message_swift = Swift_Message::newInstance($subject, $body)->setFrom($from)->setTo($to);
                    if ($mailer->send($message_swift))
                    {
                        $message = 'Ваш пароль был успешно изменен и отправлен на ваш email';
                    }
                    else
                    {
                        $message = 'Could not send email.';
                    }
                }
            }
        }

        $this->template->content = View::factory('/pages/user/reset')->bind('message', $message);
    }

}