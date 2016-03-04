<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Part extends Controller_Common {


    public function action_part()
    {

        $id = $this->request->param('id');
        $content = View::factory('/pages/part');
        $part = Model::factory('part')->get_part($id);

        $this->template->title = $part[0]['title'];
        $this->template->description = $part[0]['meta_d'];
        $this->template->keywords = $part[0]['meta_k'];

        //$uri = $this->request->uri();
        $category_arr = Model_Categories::hierarchy_out($part[0]['cat']);

        $url = '';
        foreach($category_arr as $category)
        {
            $url .= $category['category'] . ' - ';
        }
            $tree = rtrim($url, ' - ');

        $comments = Model::factory('part')->get_comments($id);
        $uri = $this->request->uri();

        if (isset($_POST['author']) and isset($_POST['text']))
        {
            if (empty($_POST['author']) or empty($_POST['text']))
            {
                exit ("<script type='text/javascript'>parent.location='http://leks/$uri';
                  alert('Пожалуйста заполните все поля');</script>");
            }
            if ($_COOKIE['cap'])
            {
                $rand = $_POST["pr"];

                if  ($rand == $_COOKIE['cap'])
                {
                    $author = trim(mysql_real_escape_string(strip_tags($_POST['author'])));
                    $text   = trim(mysql_real_escape_string(strip_tags($_POST['text'])));

                    Model::factory('part')->create_comment($id, $author, $text);


                    $address = "info@leks-design.com";
                    $subject = "Новый комментарий на сайте";
                    $message = "Появился комментарий к - ".$part[0]['title']."\nКомментарий добавил: ".$author."\nТекст комментария: ".$text."\nСсылка на заметку: http://leks-design.com//".$uri."\nДата: ".date('d-m-Y H:i')."";
                    mail($address,$subject,$message,"Content-type:text/plain; Charset=UTF-8\r\n");

                    Request::current()->redirect($uri);

                }  else {
                    exit ("<script type='text/javascript'>parent.location='http://leks/$uri';
                           alert('Вы ввели не верний защитный код');</script>");
                }

            }



        }

        $content ->comments = $comments;
        $content ->tree = $tree;
        $content ->part = $part;
        $this->template->content = $content;

    }



}