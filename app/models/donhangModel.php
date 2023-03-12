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

    public function GETID($id = '') // Lấy dữ liệu về
    {
        return $this->_donhang->GETID('MaDH = '.$id.'');
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_donhang->POST($data);
    }

    public function PUT($data=[], $id = '') // Cập nhật dữ liệu
    {
        return $this->_donhang->PUT($data, 'MaDH = '.$id.'');
    }

    public function DELETE($id = '') // Xóa dữ liệu
    {
        return $this->_donhang->DELETE('MaDH = '.$id.'');
    }
}

?>