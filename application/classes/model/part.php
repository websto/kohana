<?php defined('SYSPATH') or die('No direct script access.');

class Model_Part extends Model
{
    protected $_table = 'data';
    protected $_tableK = 'comments';

    public function get_part($id='')
    {

        $sql = "SELECT * FROM ". $this->_table ." WHERE id = :id";

        $query = DB::query(Database::SELECT, $sql)
            ->param(':id', (int)$id)
            ->execute();

        $result = $query->as_array();
        return $result;

    }

    public function get_comments($id='')
    {
        $query = DB::select()
            ->from($this->_tableK)
            ->where('post', '=', $id)
            ->and_where('cat', '=', 1)
            ->order_by('date','DESC')
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    /**
     * Create new comment
     */
    public function create_comment($id, $author, $text)
    {
        DB::insert($this->_tableK, array('post', 'author', 'text','date','cat'))
            ->values(array($id, $author, $text, date('d-m-Y H:i'),1))
            ->execute();
    }


    public function get_comments_news($id='')
    {
        $query = DB::select()
            ->from($this->_tableK)
            ->where('post', '=', $id)
            ->and_where('cat', '=', 2)
            ->order_by('date','DESC')
            ->execute()
            ->as_array();

        if($query)
            return $query;
        else
            return array();
    }

    /**
     * Create new comment
     */
    public function create_comment_news($id, $author, $text)
    {
        DB::insert($this->_tableK, array('post', 'author', 'text','date','cat'))
            ->values(array($id, $author, $text, date('d-m-Y H:i'),2))
            ->execute();
    }

}