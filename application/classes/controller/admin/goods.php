<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Goods extends Controller_Common {

    protected $_tableC = 'categories';
    protected $_tableD = 'data';
    // ������� ��������

    public function action_new()
    {
        if (HTTP_Request::POST == $this->request->method())
        {
            $directory = DOCROOT.'media/img/';
            $directory_zip = 'media/files/';
            $add = Arr::extract($_POST,array('title','meta_d','meta_k','cat','text','desc','sort'));

            if (!empty($add['title']))
            {
                $file = date('ymdHis');

                $path = $file.'.jpg';
                $path2 = '';

                if (!empty($_FILES['img']["name"])) {
                    for ($i = 0; $i < count($_FILES['img']["name"]); $i++) {
                        $u = array(' ','.','"',')','(',':',',','/','\\');
                        $tmp_name = str_replace($u,'_',$_FILES['img']['tmp_name'][$i]);
                        $target = $directory.$tmp_name.'.jpg';
                        if (move_uploaded_file($_FILES['img']['tmp_name'][$i], $target)) {
                            $name[] = $tmp_name.'.jpg';
                            $path2 = serialize($name);
                        }
                    }
                }

                if (!empty($_FILES['zip']["name"])) {

                    $zip = $file.'.zip';
                    $name_zip =  $_FILES['zip']["name"];
                    Upload::save($_FILES['zip'], $name_zip, $directory_zip);

                    if(!file_exists($zip)) {

                        $zip_file = new ZipArchive();
                        $zip_file->open($directory_zip.$zip, ZIPARCHIVE::CREATE);
                        $zip_file->addFile($directory_zip.$name_zip);
                        $zip_file->close();
                    }
                    unlink($directory_zip.$name_zip);
                }else {$zip = '';}

                $arr = implode(' ',$add['sort']);
                $sort =  preg_replace('/ {2,}/',' ',$arr);

                   DB::insert($this->_tableD, array('title','meta_d','meta_k','cat','text','img','desc','slider','sort','zip'))
                    ->values(array(trim($add['title']),$add['meta_d'],$add['meta_k'],$add['cat'],$add['text'],$path,$add['desc'],$path2,$sort,$zip))
                    ->execute();

                Upload::save($_FILES['flag'], $path, $directory);


                Request::current()->redirect('/admin_leks/main/goods');
            }
            else
            {
                 exit("<h1 align='center'>Заполните все поля!</h1>");
            }
        }

    }

    public function action_edit()

    {
        if (HTTP_Request::POST == $this->request->method())
        {
           // $directory = DOCROOT.'media/img/goods/';
            $add = Arr::extract($_POST,array('title','meta_d','meta_k','cat','id','text','desc'));

            if (!empty($add['title']))
            {

                DB::update($this->_tableD)
                    ->set(array('title' => trim($add['title']),'meta_d' => $add['meta_d'],'meta_k' => $add['meta_k'],'cat'=> $add['cat'],'text'=> $add['text'],'desc'=> $add['desc']))
                    ->where('id', '=', $add['id'])
                    ->execute();

                Request::current()->redirect('/admin_leks/main/goods');
            }
            else
            {
                exit("<h1 align='center'>������� ��������</h1>");
            }
        }

    }


    public function action_img()

    {
         if (isset($_POST['edit_id']))

            $directory = DOCROOT.'media/img/';
        $id = $_POST['edit_id'];
        $file = ORM::factory('data', $id);
        if ($file->loaded())
        {
           if ( Upload::not_empty( $_FILES['flag']))
           {
            $files = $directory.$file->img;


            $img = date('ymdHis');

            $path = $img.'.jpg';

            Upload::save($_FILES['flag'], $path, $directory);

            DB::update($this->_tableD)
                ->set(array('img' => $path))
                ->where('id', '=', $id)
                ->execute();

               unlink($files);
               Request::current()->redirect('/admin_leks/main/goods');
        }
      }
    }

    public function action_delete()
    {

        if (isset($_POST['id']))

            $directory = DOCROOT.'media/img/';
            $directory_zip = 'media/files/';
            $id = $_POST['id'];

            $file = ORM::factory('data', $id);
            if ($file->loaded())
        {

            $zip   = $directory_zip.$file->zip;
            $files = $directory.$file->img;

            $file->delete();
            unlink($files);
            unlink($zip);
        }
            Request::current()->redirect('/admin_leks/main/goods');


    }


    public function action_delete_img()
    {

        if (isset($_POST['id']))

            $directory = DOCROOT.'media/img/';
        $id = $_POST['id'];
        $name = $_POST['name'];

        $sql = "SELECT id,slider FROM data WHERE id = :id";

        $query = DB::query(Database::SELECT, $sql)
            ->param(':id', (int)$id)
            ->execute();

        $images = unserialize($query[0]["slider"]);

        unset($images[array_search($name, $images)]);
        $images = array_values($images);

         $path2 = serialize($images);
        DB::update($this->_tableD)
            ->set(array('slider' => $path2))
            ->where('id', '=', $id)
            ->execute();


        $files = $directory.$name;
        if (isset($files)) {unlink($files);}

        Request::current()->redirect("/admin_leks/main/goods_edit/$id");


    }

    public function action_new_images()
    {

        if (HTTP_Request::POST == $this->request->method())
        {
            $id = $_POST['id'];
            $directory = DOCROOT.'media/img/';

            $sql = "SELECT id,slider FROM data WHERE id = :id";

            $query = DB::query(Database::SELECT, $sql)
                ->param(':id', (int)$id)
                ->execute();
            $images = unserialize($query[0]["slider"]);

        if (!empty($_FILES['img']["name"])) {
            for ($i = 0; $i < count($_FILES['img']["name"]); $i++) {
                $u = array(' ','.','"',')','(',':',',','/','\\');
                $tmp_name = str_replace($u,'_',$_FILES['img']['tmp_name'][$i]);
                $target = $directory.$tmp_name.'.jpg';
                if (move_uploaded_file($_FILES['img']['tmp_name'][$i], $target)) {
                    if (is_array($images)) {
                        array_push($images, $tmp_name.".jpg");
                    } else {
                        $images[] = $tmp_name.".jpg";
                    }
                }

            }    $src =  serialize($images);
        }

        DB::update($this->_tableD)
            ->set(array('slider' => $src))
            ->where('id', '=', $id)
            ->execute();

        Request::current()->redirect("/admin_leks/main/goods_edit/$id");

        }
    }


    public function action_main()

    {
        if (HTTP_Request::POST == $this->request->method())
        {
            // $directory = DOCROOT.'media/img/goods/';
            $add = Arr::extract($_POST,array('id','main'));

            if ($add['main'] == 1) {$main = 0;}
            if ($add['main'] == 0) {$main = 1;}


                DB::update($this->_tableD)
                    ->set(array('main' => $main))
                    ->where('id', '=', $add['id'])
                    ->execute();

                Request::current()->redirect('/admin_leks/main/goods');


        }

    }
 
} // End Main