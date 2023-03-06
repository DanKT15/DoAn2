<?php

class nsxModel extends Model
{
    private $table = 'nhasanxuat';
    private $_nsx;

    public function __construct()
    {
        $this->_nsx = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_nsx->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_nsx->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_nsx->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_nsx->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_nsx->DELETE($condition);
    }
}
