<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Categ extends Controller_Common {

    protected $_table = 'data';

    public function action_cat()
    {
        $id = $this->request->param('id');
        $content = View::factory('/pages/cat');
        $meta = Model::factory('categ')->get_metad($id);

        $this->template->title = $meta[0]['category'];
        $this->template->description = $meta[0]['meta_d'];
        $this->template->keywords = $meta[0]['meta_k'];

        //$dop   = Model::factory('categ')->get_dop($id);
        $count = Model::factory('categ')->get_pagin($id);
        //$pag   = Pagination::factory(array('total_items' => $count));



        if (!Session::instance()->get('items'))  {$items = "10";}

        else
        {
        $items = Model::factory('categ')->get_items();
        }

        if (isset($_POST['cookie']))

        {     $items = $_POST['cookie'];

              Session::instance()->set('items', $items);
        }
        $pag = Pagination::factory(array(
            'total_items' => $count,
            'items_per_page' => $items,

        ));

        if (!empty($_POST['sort']))
        {
            $sort = $_POST['sort'];

            Session::instance()->set('sort', $sort);


        $com =  Model::factory('categ')->get_sort();

            foreach($com as $key => $val){
                if (empty($val)){
                    unset($com[$key]);
                }
            }
            $search = implode(" ",$com);
            //var_dump($com);
           // exit;

           // $sql = "SELECT * FROM ". $this->_table." WHERE MATCH(sort) AGAINST('$search')";
           $sql = "SELECT * FROM ". $this->_table." WHERE sort LIKE '%$search%'";
        $res = DB::query(Database::SELECT, $sql)
            ->execute();
        }else{

        $res = DB::select('d.id','d.title','d.img','d.desc','d.price','d.cat')
            ->from(array('data','d'))
            ->join(array('categories','c'))
            ->on('c.id', '=', 'd.cat')
            ->where('c.parent_id', '=', $id)
            ->or_where('c.id', '=', $id)
            ->order_by('id','DESC')
            ->limit($pag->items_per_page)
            ->offset($pag->offset)
            ->execute();
        }


        $cat = $res->as_array();

        $content ->meta = $meta;
        $content ->cat = $cat;
        $content ->pag = $pag;
        //$content ->dop = $dop;


        $this->template->content = $content;

    }

}