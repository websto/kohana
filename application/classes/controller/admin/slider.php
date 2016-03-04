<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Slider extends Controller_Common {

    protected $_tableS = 'slider';
    // Главная страница

    public function action_new()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $directory = DOCROOT.'media/img/slider/';
            $add = Arr::extract($_POST,array('desc','href'));

            if (!empty($add['desc']))
            {
                $file = date('ymdHis');

                $path = $file.'.jpg';


                DB::insert($this->_tableS, array('desc','path','href'))
                    ->values(array($add['desc'],$path,$add['href']))
                    ->execute();

                Upload::save($_FILES['flag'], $path, $directory);

                Request::current()->redirect('/admin_leks/main/slider');
            }
            else
            {
                exit("<h1 align='center'>Введите текст</h1>");
            }
        }

    }

    public function action_delete()
    {

        if (isset($_POST['id']))

            $directory = DOCROOT.'media/img/slider/';
        $id = $_POST['id'];

        $file = ORM::factory('slider', $id);
        if ($file->loaded())
        {

            $files = $directory.$file->path;

            $file->delete();
            unlink($files);
        }
        Request::current()->redirect('/admin_leks/main/slider');


    }

    public function action_img()

    {
        if (isset($_POST['edit_id']))

            $directory = DOCROOT.'media/img/slider/';
        $id = $_POST['edit_id'];
        $file = ORM::factory('slider', $id);
        if ($file->loaded())
        {
            if ( Upload::not_empty( $_FILES['flag']))
            {
                $files = $directory.$file->path;


                $img = date('ymdHis');

                $path = $img.'.jpg';

                Upload::save($_FILES['flag'], $path, $directory);

                DB::update($this->_tableS)
                    ->set(array('path' => $path))
                    ->where('id', '=', $id)
                    ->execute();

                unlink($files);
                Request::current()->redirect('/admin_leks/main/slider');
            }
        }
    }
 
} // End Main