<?php  defined('SYSPATH') or die('No direct script access.');
 
class Controller_Static extends Controller_Common {
 

	  
	  public function action_contacts()
	  {

       $content = View::factory('/pages/contacts');

        /*  $cat = Model::factory('static')->get_contacts();
          $content ->cat = $cat;*/
          $this->template->content = $content;
	   
      }
	  
	  public function action_about()
	  {

       $content = View::factory('/pages/about');


        /*  $cat = Model::factory('static')->get_about();
          $content ->cat = $cat;*/
          $this->template->content = $content;

	   
      }



    public function action_gallery()
    {

        $content = View::factory('/pages/gallery');

        $gall = ORM::factory('gallery')
            ->order_by('id','DESC')
            ->find_all();

          $content ->gall = $gall;
        $this->template->content = $content;


    }

}
