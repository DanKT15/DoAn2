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

    public function GETID($id = '') // Lấy dữ liệu về
    {
        return $this->_nsx->GETID('MaNSX = '.$id.'');
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_nsx->POST($data);
    }

    public function PUT($data=[], $id = '') // Cập nhật dữ liệu
    {
        return $this->_nsx->PUT($data, 'MaNSX = '.$id.'');
    }

    public function DELETE($id = '') // Xóa dữ liệu
    {
        return $this->_nsx->DELETE('MaNSX = '.$id.'');
    }
}

?>