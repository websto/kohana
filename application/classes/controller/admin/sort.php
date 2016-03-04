<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Sort extends Controller_Common {

    protected $_tableC = 'sort';
    // Главная страница

    public function action_home()
    {
        if (HTTP_Request::POST == $this->request->method())
        {

            $add = Arr::extract($_POST,array('category_name','select_parent_category'));

            if (!empty($add['category_name']))
            {


            DB::insert($this->_tableC, array('category','parent_id'))
                ->values(array(trim($add['category_name']),$add['select_parent_category']))
                ->execute();


                Request::current()->redirect('/admin_leks/main/sort');
            }
            else
            {
                 exit("<h1 align='center'>Введите название категории</h1>");
            }
        }

    }

    public function action_edit()

    {
        if (HTTP_Request::POST == $this->request->method())
        {

            $add = Arr::extract($_POST,array('edit_name','edit_id','select_parent_category'));

            if (!empty($add['edit_name']))
            {

                DB::update($this->_tableC)
                    ->set(array('category' => trim($add['edit_name']),'parent_id'=> $add['select_parent_category']))
                    ->where('id', '=', $add['edit_id'])
                    ->execute();

                Request::current()->redirect('/admin_leks/main/sort');
            }
            else
            {
                exit("<h1 align='center'>Введите название категории</h1>");
            }
        }

    }



    public function action_delete()
    {

        if (isset($_POST['id']))


            $id = $_POST['id'];


            $file = ORM::factory('sort', $id);
                if ($file->loaded())
        {
                $file->delete();
        }
            Request::current()->redirect('/admin_leks/main/sort');


    }
 
} // End Main