<?php defined('SYSPATH') or die('No direct script access.');

class Model_Data extends ORM
{
    protected $_table_name = 'data';

    public function get_cart_sess()
    {
        $cnt = array();
        $cnt['count_items'] = Session::instance()->get('count_items');
        $cnt['total_price'] = Session::instance()->get('total_price');
       // $cnt['count'] = Session::instance()->get("count");
     /* $cnt['cart_items'] = $_COOKIE['cart_items'];
        $cnt['total_price'] = $_COOKIE['total_price'];
        $cnt['count'] = $_COOKIE['count'];
     */

        return $cnt;
    }

    public function get_items_cart()
    {
        $ids = Session::instance()->get("ids");
        if (!empty($ids)){
        $sql = "SELECT * FROM ". $this->_table_name ." WHERE id IN ($ids)";
        $res = DB::query(Database::SELECT, $sql)
            ->execute();
        $result = $res->as_array();

        return $result;
       }
    }

    public function get_cart($ids='')
    {
        $sql = "SELECT * FROM ". $this->_table_name ." WHERE id IN ($ids)";
        $res = DB::query(Database::SELECT, $sql)
            ->execute();
        $result = $res->as_array();

        $total = '';
        $end_res ='';

        foreach ($result as $v){

            $sess_count = Session::instance()->get("count[$v[id]]");

            $total += $sess_count*$v['price'];
            // setcookie("total_price",$total,0x6FFFFFFF,'/');
            Session::instance()->set("total_price", $total);

            $end = <<<RES
        <li data-id="$v[id]">
            <img class="delete" src="/media/images/cart_del.png" alt="">

            <div class="count">
                <span class="minus"> - </span><b id="cnt_count">$sess_count</b><span class="plus"> + </span>
            </div>

            <a href="">
                <img width="120" height="120" src="/media/img/$v[img]"></a>
            <span class="price">$v[price]</span>
        </li>
RES;

            $end_res .= $end;

        }

        return array('end_res'=>$end_res,'total'=>$total);
    }



}