<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Admin_Main extends Controller_Common {
    
	 
	 public $template ='admin_leks/home';
    // Главная страница


    public static function ckeditor($name, $value = '', $height = '260', $width = '98%')
    {
        $url_base = URL::base();

        include_once(DOCROOT.'media/assets/vendors/ckeditor/ckeditor.php');
        include_once(DOCROOT.'media/assets/vendors/ckfinder/ckfinder.php');

        $CKEditor = new CKEditor();
        $CKEditor->basePath = $url_base . 'media/assets/vendors/ckeditor/';

        $CKEditor->config['height'] = $height . 'px';
        $CKEditor->config['width']  = $width;

        $CKEditor->config['filebrowserBrowseUrl']      = $url_base . 'media/assets/vendors/ckfinder/ckfinder.html';
        $CKEditor->config['filebrowserImageBrowseUrl'] = $url_base . 'media/assets/vendors/ckfinder/ckfinder.html?type=Images';
        $CKEditor->config['filebrowserFlashBrowseUrl'] = $url_base . 'media/assets/vendors/ckfinder/ckfinder.html?type=Flash';
        $CKEditor->config['filebrowserUploadUrl']      = $url_base . 'media/assets/vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
        $CKEditor->config['filebrowserImageUploadUrl'] = $url_base . 'media/assets/vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
        $CKEditor->config['filebrowserFlashUploadUrl'] = $url_base . 'media/assets/vendors/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';

        $config['uiColor'] = '#efefef';

        // Кнопки (добавляем/убираем)
        $config['toolbar'] = array(
            array('Source','-', 'Maximize', 'ShowBlocks'),
            array('Cut','Copy','Paste','PasteText','PasteFromWord'),
            array('Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'),
            array('Link','Unlink','Anchor'),
            array('Image','Table','HorizontalRule','SpecialChar','PageBreak'),
            '/',
            array('Format','Font', 'Bold','Italic','Underline','Strike',),
            array('JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','NumberedList','BulletedList'),
            array('Outdent','Indent','-','TextColor','BGColor','-','Subscript','Superscript'),
            array('uiColor')
        );

        ob_start();

        //return ob_get_clean();
        return $CKEditor->editor($name, $value, $config);


    }

	 public function before()
    {
        parent::before();
        
        if (!Auth::instance()->logged_in('admin'))
        {
			/*echo View::factory('/admin_alex/reg');
			exit();*/
            $this->request->redirect('/admin_leks/reg');
        } 
		   // else $this->request->redirect('/admin_alex/main');
    }
	
	
	 
	
    public function action_index()
    {
		//$id = $this->request->param('id');
		$content = View::factory('/admin_leks/main');

	       
		    $this->template->content = $content;
			
	}



    public function action_str()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/str');



        $this->template->content = $content;

    }

    public function action_categ()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/categ');
        $res = DB::select('id','category')
            ->where('parent_id','=',0)
            ->from('sort')
            ->execute();

        $group = $res->as_array();
        $content->group = $group;

        $this->template->content = $content;

    }

    public function action_goods()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/goods');

        $sq = "SELECT * FROM data ORDER BY id DESC";
        $quer = DB::query(Database::SELECT, $sq)
            ->execute();
        $news = $quer->as_array();

        $res = DB::select('id','category','parent_id')
            ->from('sort')
            ->execute();

        $group = $res->as_array();



        //var_dump($sort);echo "<br>";
         //var_dump($group);exit;

        $content->group = $group;
        $content->news = $news;
        $this->template->content = $content;

    }

    public function action_sort()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/sort');

        $sq = "SELECT * FROM sort";
        $quer = DB::query(Database::SELECT, $sq)
            ->execute();
        $news = $quer->as_array();

        $content->news = $news;
        $this->template->content = $content;

    }

    public function action_slider()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/slider');

        $this->template->content = $content;

    }

    public function action_gallery()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/gallery');

        $sq = "SELECT * FROM gallery";
        $quer = DB::query(Database::SELECT, $sq)
            ->execute();
        $news = $quer->as_array();

        $content->news = $news;

        $this->template->content = $content;

    }


    public function action_goods_edit()
    {
        $id = $this->request->param('id');
        $content = View::factory('/admin_leks/goods_edit');

        $news = ORM::factory('data')->where('id', '=', $id)->find();

        $sql = "SELECT (c.category) FROM categories c JOIN data d ON c.id=d.cat WHERE d.id='$id'";

        $res = DB::query(Database::SELECT, $sql)
            ->param(':id', (int)$id)
            ->execute();
        $cat = $res->as_array();

        $content->cat = $cat;
        $content->news = $news;

        $this->template->content = $content;

    }

    public function action_news()
    {
        //$id = $this->request->param('id');
        $content = View::factory('/admin_leks/news');

        $sq = "SELECT * FROM news ORDER BY id DESC";
        $quer = DB::query(Database::SELECT, $sq)
            ->execute();
        $news = $quer->as_array();

        $content->news = $news;
        $this->template->content = $content;

    }

    public function action_news_edit()
    {
        $id = $this->request->param('id');
        $content = View::factory('/admin_leks/news_edit');

        $news = ORM::factory('news')->where('id', '=', $id)->find();

        $content->news = $news;

        $this->template->content = $content;

    }


} // End Main