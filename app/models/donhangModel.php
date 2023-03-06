<?php

class donhangModel extends Model
{
    private $table = 'donhang';
    private $_donhang;

    public function __construct()
    {
        $this->_donhang = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_donhang->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_donhang->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_donhang->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_donhang->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_donhang->DELETE($condition);
    }
}
