<?php defined('SYSPATH') or die('No direct script access.');

class Model_Categories extends ORM
{
    protected $_table_name = 'categories';

    protected static $i = 0;
    protected static $category_out_arr= array();

    public static function hierarchy_out($id)
    {
        $category = ORM::factory('categories')
            ->where('id', '=', $id)
            ->find();

        if($category->loaded())
        {
            self::$category_out_arr[self::$i]['category'] = $category->category;
            self::$i ++;
            self::hierarchy_out($category->parent_id);
        }

        krsort(self::$category_out_arr);
        return self::$category_out_arr;
    }


}