<?php defined('SYSPATH') or die('No direct script access.');
 
class Helper_MyUrl
 {
    public static function SEOIt($str)
     {
         $str = explode('/', $str);
		 $u = array(' ','.','"',')','(',':',',');
         $str = str_replace($u, '-', $str[0]);
		 $str = rtrim($str,"-");
        return $str;
     }
 }