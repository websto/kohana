<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ulogin extends Controller {
    /**
     * Получает через POST token от login и регистрирует пользователя
     */
    public function action_create()
    {
        if (isset($_POST['token']))
        {
            $ulogin = new Ulogin();
            $ulogin->login();

            HTTP::redirect('user');
        }
        else
        {
            throw new Kohana_Exception('Неверный token');
        }
    }

}