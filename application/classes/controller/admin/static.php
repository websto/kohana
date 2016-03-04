<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Static extends Controller_Common {

    protected $_tableS = 'static';
    // Главная страница

    public function action_edit()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $page = Arr::extract($_POST,array('page'));
            $add =  Arr::extract($_POST,array($page['page']));
           // var_dump($add);

                DB::update($this->_tableS)
                ->set(array($page['page'] => ($add[$page['page']])))
                //->where($page['page'], '=', $page['page'])
                ->execute();


            Request::current()->redirect("/admin_leks/main/$page[page]");


        }

    }




 
} // End Main