<?php

class sanphamModel extends Model
{
    private $table = 'sanpham';
    private $_sanpham;

    public function __construct()
    {
        $this->_sanpham = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_sanpham->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_sanpham->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_sanpham->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_sanpham->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_sanpham->DELETE($condition);
    }
}
