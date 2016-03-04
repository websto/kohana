<?php  defined('SYSPATH') or die('No direct script access.');
 
class Controller_Home extends Controller_Common {

      public function action_index()
	  {
       //$id = $this->request->param('id');
          $content = View::factory('/pages/main');
          $news = Model::factory('categ')->get_main();

          $content->news = $news;
          $this->template->content = $content;
      }


}

//End Page