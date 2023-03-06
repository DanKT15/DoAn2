<?php

class ctdhModel extends Model
{
    private $table = 'chitietdonhang';
    private $_taikhoan;

    public function __construct()
    {
        $this->_taikhoan = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_taikhoan->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_taikhoan->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_taikhoan->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_taikhoan->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_taikhoan->DELETE($condition);
    }
}
