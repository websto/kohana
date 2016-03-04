<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Gallery extends Controller_Common {

    protected $_tableG = 'gallery';
    // ������� ��������

    public function action_new()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $directory = DOCROOT.'media/img/gallery/';
            $add = Arr::extract($_POST,array('title','desc'));

            if (!empty($add['title']))
            {
                $file = date('ymdHis');

                $path = $file.'.jpg';

                    DB::insert($this->_tableG, array('title','path','desc'))
                    ->values(array(trim($add['title']),$path,$add['desc']))
                    ->execute();

                Upload::save($_FILES['flag'], $path, $directory);


                Request::current()->redirect('/admin_leks/main/gallery');
            }
            else
            {
                 exit("<h1 align='center'>Заполните все поля!</h1>");
            }
        }

    }

    public function action_img()

    {
        if (isset($_POST['edit_id']))

            $directory = DOCROOT.'media/img/gallery/';
        $id = $_POST['edit_id'];
        $file = ORM::factory('gallery', $id);
        if ($file->loaded())
        {
            if ( Upload::not_empty( $_FILES['flag']))
            {
                $files = $directory.$file->path;


                $img = date('ymdHis');

                $path = $img.'.jpg';

                Upload::save($_FILES['flag'], $path, $directory);

                DB::update($this->_tableG)
                    ->set(array('path' => $path))
                    ->where('id', '=', $id)
                    ->execute();

                unlink($files);
                Request::current()->redirect('/admin_leks/main/gallery');
            }
        }
    }

    public function action_delete()
    {

        if (isset($_POST['id']))

            $directory = DOCROOT.'media/img/gallery/';
        $id = $_POST['id'];

        $file = ORM::factory('gallery', $id);
        if ($file->loaded())
        {

            $files = $directory.$file->path;

            $file->delete();
            unlink($files);;
        }
        Request::current()->redirect('/admin_leks/main/gallery');


    }


 
} // End Main