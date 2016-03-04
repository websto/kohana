<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Categ extends Controller_Common {

    protected $_tableC = 'categories';
    // ������� ��������

    public function action_home()
    {
        if (HTTP_Request::POST == $this->request->method())
        {

            $add = Arr::extract($_POST,array('category_name','meta_d','meta_k','select_parent_category','sort'));

            if (!empty($add['category_name']))
            {


            DB::insert($this->_tableC, array('category','meta_d','meta_k','parent_id','sort'))
                ->values(array(trim($add['category_name']),$add['meta_d'],$add['meta_k'],$add['select_parent_category'],serialize($add['sort'])))
                ->execute();


                Request::current()->redirect('/admin_leks/main/categ');
            }
            else
            {
                 exit("<h1 align='center'>Заполните поле!</h1>");
            }
        }

    }

    public function action_edit()

    {
        if (HTTP_Request::POST == $this->request->method())
        {

            $add = Arr::extract($_POST,array('edit_name','meta_d','meta_k','edit_id','select_parent_category'));

            if (!empty($add['edit_name']))
            {

                DB::update($this->_tableC)
                    ->set(array('category' => trim($add['edit_name']),'meta_d' => $add['meta_d'],'meta_k' => $add['meta_k'],'parent_id'=> $add['select_parent_category']))
                    ->where('id', '=', $add['edit_id'])
                    ->execute();

                Request::current()->redirect('/admin_leks/main/categ');
            }
            else
            {
                exit("<h1 align='center'>Заполните поле!</h1>");
            }
        }

    }



    public function action_delete()
    {

        if (isset($_POST['id']))


            $id = $_POST['id'];


            $file = ORM::factory('categories', $id);
                if ($file->loaded())
        {
                $file->delete();
        }
            Request::current()->redirect('/admin_leks/main/categ');


    }
 
} // End Main