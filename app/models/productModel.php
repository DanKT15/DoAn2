<?php

class ProductModel extends Model
{
    // khoi tao parent:: neu co su dung construct trong model
    // public function __construct()
    // {
    //     parent::__construct();
    //     echo 'construct con';
    // }

    private $_table = 'danhmuc';

    public function getlist()
    {
        $query = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function listid($id = '')
    {
        $arr = ['item 1','item 2','item 3','item 4'];

        return $arr[$id];
    }
}
