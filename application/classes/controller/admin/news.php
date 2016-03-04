<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_News extends Controller_Common {

    protected $_tableN = 'news';
    // Главная страница

    public function action_new()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $directory = DOCROOT.'media/img/news/';
            $add = Arr::extract($_POST,array('title','meta_d','meta_k','text','date'));

            if (!empty($add['title']))
            {
                $file = date('ymdHis');

                $path = $file.'.jpg';


                DB::insert($this->_tableN, array('title','meta_d','meta_k','date','text','img'))
                    ->values(array(trim($add['title']),$add['meta_d'],$add['meta_k'],$add['date'],$add['text'],$path))
                    ->execute();

                Upload::save($_FILES['flag'], $path, $directory);

                Request::current()->redirect('/admin_leks/main/news');
            }
            else
            {
                 exit("<h1 align='center'>Введите название</h1>");
            }
        }

    }

    public function action_edit()

    {
        if (HTTP_Request::POST == $this->request->method())
        {
           // $directory = DOCROOT.'media/img/goods/';
            $add = Arr::extract($_POST,array('title','meta_d','meta_k','id','text','date'));

            if (!empty($add['title']))
            {

                DB::update($this->_tableN)
                    ->set(array('title' => trim($add['title']),'meta_d' => $add['meta_d'],'meta_k' => $add['meta_k'],'text'=> $add['text'],'date'=> $add['date']))
                    ->where('id', '=', $add['id'])
                    ->execute();

                Request::current()->redirect('/admin_leks/main/news');
            }
            else
            {
                exit("<h1 align='center'>Введите название</h1>");
            }
        }

    }


    public function action_img()

    {
         if (isset($_POST['edit_id']))

            $directory = DOCROOT.'media/img/news/';
        $id = $_POST['edit_id'];
        $file = ORM::factory('news', $id);
        if ($file->loaded())
        {
           if ( Upload::not_empty( $_FILES['flag']))
           {
            $files = $directory.$file->img;


            $img = date('ymdHis');

            $path = $img.'.jpg';

            Upload::save($_FILES['flag'], $path, $directory);

            DB::update($this->_tableN)
                ->set(array('img' => $path))
                ->where('id', '=', $id)
                ->execute();

               unlink($files);
               Request::current()->redirect('/admin_leks/main/news');
        }
      }
    }

    public function action_delete()
    {

        if (isset($_POST['id']))

            $directory = DOCROOT.'media/img/news/';
            $id = $_POST['id'];

            $file = ORM::factory('news', $id);
            if ($file->loaded())
        {

            $files = $directory.$file->img;

            $file->delete();
            unlink($files);
        }
            Request::current()->redirect('/admin_leks/main/news');


    }


 
} // End Main