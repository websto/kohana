<?php defined('SYSPATH') or die('No direct script access.');


class Model_News extends ORM
{
    protected $_table_name = 'news';

    public function get_news()

    {

        $news = ORM::factory('news')
            ->limit(4)
            ->order_by('date', 'DESC')
            ->find_all();
        return $news;



    }

}