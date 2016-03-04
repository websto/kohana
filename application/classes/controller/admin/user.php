<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller {

//public $template ='admin_alex/reg';

    public function action_login()
    {
		if (Auth::instance()->logged_in('admin'))
        {
            HTTP::redirect('/admin_leks/main/index');
		}
		
        if (HTTP_Request::POST == $this->request->method())
        {
            // Attempt to login user
            $remember = true;
            $user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);

            // If successful, redirect user
            if ($user)
            {
                Request::current()->redirect('/admin_leks/main/index');
            }
            else
            {
                $message = '�������� ����� ��� ������';
				View::bind_global('message', $message);
            }
        }

        echo View::factory('admin_leks/reg');
    }

    public function action_reset()
    {
        $auth = Auth::instance();

        if ($_POST)
        {

       // $id = $this->request->param('id');
                $user = ORM::factory('user',1);

                $data = Arr::extract($_POST, array('passS', 'passN'));


            if ($auth->hash($data['passS']) == $auth->password('admin'))

            {
                $password = trim($data['passN']);

                  $user->password = $password;
                  $user->save();

                HTTP::redirect('/admin_leks/main/index');

            }

            else
            {
                exit("<h2 align='center' >�� ����� �� ������ ������ ������</h2><br>
                <form><div align='center'><input type='button' value='�����' onClick='history.go(-1)'></div></form>");


            }


        }
        else
        {
            exit ("<h2 align='cenrer'>Couldn't load user</h2>");
        }

    }

    public function action_logout()
    {
        // Log user out
        Auth::instance()->logout();

        // Redirect to login page
        HTTP::redirect('/');
    }
	 
	
}