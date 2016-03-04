<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Search extends Controller_Common
{
    protected $_table = 'data';

    public function action_search()
	{

	   $search = !empty($_REQUEST['text']) ? mysql_real_escape_string(trim(strip_tags($_REQUEST['text']))) : NULL;
	   
	    $content = View::factory('/pages/do_search');

	  if (empty($search) || strlen($search) < 4)
      {
		  $meta = "Поисковый запрос не введён, либо он менее 4-х символов";
      }
      else
      {
          $meta = "Поиск по запросу -  $search";
      }
        $sql = "SELECT * FROM ". $this->_table." WHERE MATCH(title) AGAINST('$search') LIMIT 20";
		$query = DB::query(Database::SELECT, $sql) 
                  ->execute(); 

                  $cat = $query->as_array();

				  $this->template->title = "Поиск по запросу -  $search";
				  $content ->cat = $cat;
                  $content ->meta = $meta;
				  $this->template->content = $content;
	}
}
