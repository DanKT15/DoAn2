<?php

class danhmucModel extends Model
{
    private $table = 'danhmuc';
    private $_danhmuc;

    public function __construct()
    {
        $this->_danhmuc = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_danhmuc->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_danhmuc->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_danhmuc->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_danhmuc->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_danhmuc->DELETE($condition);
    }
}

?>