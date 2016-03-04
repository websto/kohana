<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Categ extends Model
{
    protected $_tableD = 'data';
    protected $_tableC = 'categories';
    protected $_tableS = 'slider';
    protected $_tableSort = 'sort';
    /**
     * Get all articles
     * @return array
     */

    public function get_meta()
    {
        $sql = "SELECT * FROM ". $this->_tableC;
        /*return DB::query(Database::SELECT, $sql)
            ->execute();*/
        $query = DB::query(Database::SELECT, $sql)
            ->execute();

        $result = $query->as_array();
        return $result;

    }
    public function get_pagin($id)
    {
        $sql = "SELECT (d.id)  FROM data d JOIN categories c ON c.id=d.cat WHERE c.parent_id='$id' OR c.id='$id'";

        $res = DB::query(Database::SELECT, $sql)
            ->execute() ->count();
        return $res;
    }

    public function get_metad($id='')
    {

        $sql = "SELECT category,meta_d,meta_k,sort FROM ". $this->_tableC ." WHERE id = :id";

        $query = DB::query(Database::SELECT, $sql)
            ->param(':id', (int)$id)
            ->execute();

        $result = $query->as_array();


        return $result;

    }

    public function get_slider()
    {
        $query = DB::select('id','path','desc','href')
            ->from($this->_tableS)
            ->order_by('id','DESC')
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    public function get_sortL()
    {
        $query = DB::select('id','parent_id','category')
            ->from($this->_tableSort)
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    public function get_main()
    {
        $query = DB::select('id','img','desc','title')
            ->from($this->_tableD)
            ->where('main','=',1)
            ->order_by('id','DESC')
            ->limit(5)
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }



    public function get_items()
    {
        $items = Session::instance()->get('items');

        return $items;
    }

    public function get_comparison()
    {
        $com = Session::instance()->get('comparison');

        return $com;
    }

    public function get_auth()
    {
        $auth = Session::instance()->get('auth');

        return $auth;
    }
    public function get_sort()
    {
        $auth = Session::instance()->get('sort');

        return $auth;
    }

}