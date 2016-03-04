<?php  defined('SYSPATH') or die('No direct script access.');

class Controller_Cart extends Controller_Common {

    public     $cnt = array();
    protected  $arr = array();

    public function action_items_count()
    {

        if (isset($_POST['id']))
        {
            $id = (int)($_POST['id']);
            $sess_ids = Session::instance()->get("ids");

            if (!empty($sess_ids)){

                $ids = $sess_ids.','.$id;

            }else{
                $ids = $id;
            }

            $count = substr_count($ids,$id);

            // setcookie("count[$id]",$count,0x6FFFFFFF,'/');
            // setcookie("ids",$ids,0x6FFFFFFF,'/');

            Session::instance()->set("ids", $ids);
            Session::instance()->set("count[$id]", $count);

            $res = Model::factory('data')->get_cart($ids);

            // $cart = count($_COOKIE['cart_items']);
            $count_items = Session::instance()->get("count_items");
            if (!empty($count_items)){
                $cnt['count_items']=$count_items+1;
            } else {
                $cnt['count_items']=1;
            }
            // setcookie("cart_items",$cnt['cart_items'],0x6FFFFFFF,'/');
            Session::instance()->set("count_items", $cnt['count_items']);

            $arr[0] = $res['end_res'];
            $arr[1] = $cnt['count_items'];
            $arr[2] = $res['total'];
            // $arr[3] = $count;

            echo json_encode($arr);
            exit();

        }
    }

    public function action_items_remove()
    {

        if (isset($_POST['id']))
        {
            $id = (int)($_POST['id']);

            $sess_ids = Session::instance()->get("ids");

            if (!empty($sess_ids)){

                $u =   array(','.$id, $id);
                $ids = str_replace($u, '', $sess_ids);
                $ids = trim($ids,",");

            }

            if (empty($ids))
            {

                $end_res = "<li>Ваша корзина пуста!</li>";


                $arr[0] = $end_res;
                $arr[1] = '';
                $arr[2] = '';

                Session::instance()->delete("total_price");
                Session::instance()->delete("count_items");
                Session::instance()->delete("ids");
                Session::instance()->delete("count[$id]");


            }else{

                // setcookie("count[$id]",$count,0x6FFFFFFF,'/');
                // setcookie("ids",$ids,0x6FFFFFFF,'/');

                Session::instance()->set("ids", $ids);
                Session::instance()->delete("count[$id]");

                $res = Model::factory('data')->get_cart($ids);

                // $cart = count($_COOKIE['cart_items']);

                $count_items = Session::instance()->get("count_items");
                $count = substr_count($sess_ids,$id);
                $cnt['count_items']= $count_items - $count;

                // setcookie("cart_items",$cnt['cart_items'],0x6FFFFFFF,'/');
                Session::instance()->set("count_items", $cnt['count_items']);


                $arr[0] = $res['end_res'];
                $arr[1] = $cnt['count_items'];
                $arr[2] = $res['total'];
                // $arr[3] = $count;
            }
            echo json_encode($arr);
            exit();

        }




    }

    public function action_items_minus()
    {

        if (isset($_POST['id']))
        {
            $id = (int)($_POST['id']);

            $sess_ids = Session::instance()->get("ids");

                $ar = explode(",",$sess_ids);

                $key = array_search($id, $ar);

                    unset($ar[$key]);

                $ids = implode(",", $ar);

            if (empty($ids))
            {

                $end_res = "<li>Ваша корзина пуста!</li>";


                $arr[0] = $end_res;
                $arr[1] = '';
                $arr[2] = '';

                Session::instance()->delete("total_price");
                Session::instance()->delete("count_items");
                Session::instance()->delete("ids");
                Session::instance()->delete("count[$id]");


            }else{

                $count = substr_count($ids,$id);

                if ($count <= 0){

                     Session::instance()->delete("count[$id]");

                 }else{

                      Session::instance()->set("count[$id]", $count);
                 }

                Session::instance()->set("ids", $ids);


            $res = Model::factory('data')->get_cart($ids);

            $count_items = Session::instance()->get("count_items");
            if (!empty($count_items)){
                $cnt['count_items']=$count_items-1;
            }


            Session::instance()->set("count_items", $cnt['count_items']);


                $arr[0] = $res['end_res'];
                $arr[1] = $cnt['count_items'];
                $arr[2] = $res['total'];
                // $arr[3] = $count;

         }

            echo json_encode($arr);
            exit();

        }




    }

}

//End Page