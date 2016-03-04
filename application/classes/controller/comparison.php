<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comparison extends Controller_Common
{
    protected $_table = 'data';

    public function action_comparison()
    {
        $content = View::factory('/pages/comparison');


        if (!empty($_POST['items']))
        {
            $post = $_POST['items'];

            if(is_array($post)){
                foreach ($post as $k=>$v){
                    $comparison[$k] = mysql_real_escape_string($v);
                }
            }

            $sess_id =  Model::factory('categ')->get_comparison();

            if (!empty($sess_id)) {

                $c = array_merge($sess_id,$comparison);
                $comparison = array_unique($c);

            }

            Session::instance()->set('comparison', $comparison);
        }

        $sess =  Model::factory('categ')->get_comparison();

        if ($sess == false) Request::current()->redirect('/');


        $cat = ORM::factory('data')
            ->where('id', 'IN', $sess)
            ->find_all()
            ->as_array();

        $content->cat= $cat;
        $this->template->content = $content;


    }

    public function action_delete()
    {

        if (isset($_POST['com']))
        {

            $post = (int)$_POST['com'];

            $sess_id = Model::factory('categ')->get_comparison();
            $count = count($sess_id);

            if(is_array($sess_id))
            {
                $key_array = array_search($post, $sess_id);
                unset($sess_id[$key_array]);
            }
            Session::instance()->set('comparison', $sess_id);

            if ($count==1)
            {
                Session::instance()->delete("comparison");
                Request::current()->redirect('/');
            } else
                Request::current()->redirect('/comparison');

        }

    }


}
