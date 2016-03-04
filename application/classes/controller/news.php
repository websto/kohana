<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Common {

    public function action_index()
    {
        $id = $this->request->param('id');
        $content = View::factory('/pages/news');

        $news = ORM::factory('news')
            ->where('id', '=', $id)
            ->find_all();
        // var_dump($news);exit;
        $this->template->title = $news[0]->title;
        $this->template->description = $news[0]->meta_d;
        $this->template->keywords = $news[0]->meta_k;

        $comments = Model::factory('part')->get_comments_news($id);
        $uri = $this->request->uri();
        $site = "URL::site($uri)";

        if (isset($_POST['author']) and isset($_POST['text']))
        {
            if (empty($_POST['author']) or empty($_POST['text']))
            {
                exit ("<script type='text/javascript'>parent.location='$site';
                  alert('Пожалуйста заполните все поля');</script>");
            }
            if ($_COOKIE['cap'])
            {
                $rand = $_POST["pr"];

                if  ($rand == $_COOKIE['cap'])
                {
                    $author = trim(mysql_real_escape_string(strip_tags($_POST['author'])));
                    $text   = trim(mysql_real_escape_string(strip_tags($_POST['text'])));

                    Model::factory('part')->create_comment_news($id, $author, $text);


                    $address = "info@leks-design.com";
                    $subject = "Новый комментарий на сайте";
                    $message = "Появился комментарий к - ".$news[0]->title."\nКомментарий добавил: ".$author."\nТекст комментария: ".$text."\nСсылка на заметку: ".$site."\nДата: ".date('d-m-Y H:i')."";
                    mail($address,$subject,$message,"Content-type:text/plain; Charset=UTF-8\r\n");

                    Request::current()->redirect($uri);

                }  else {
                           exit ("<script type='text/javascript'>parent.location='http://leks/$uri';
                           alert('Вы ввели не верний защитный код');</script>");
                        }
             }

         }

        $content->news = $news;
        $content ->comments = $comments;
        $this->template->content = $content;


    }

    public function action_all()
    {
        $content = View::factory('/pages/news_all');


        $table = ORM::factory('news')
            ->find_all();
        $count = $table->count();



        /*$pag = Pagination::factory(array('total_items' => $count));*/
        $pag = Pagination::factory(array(
            'total_items' => $count,
            'items_per_page' => 6,

        ));


        $res = DB::select('id','title','date','img','text')
            ->from('news')
            ->order_by('id','DESC')
            ->limit($pag->items_per_page)
            ->offset($pag->offset)
            ->execute();


        $news = $res->as_array();

        $content->news = $news;
        $content->pag = $pag;


        $this->template->content = $content;


    }

}