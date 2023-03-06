<?php

class ctdhModel extends Model
{
    private $table = 'chitietdonhang';
    private $_ctdh;

    public function __construct()
    {
        $this->_ctdh = new Model($this->table);
    }

    public function GETALL() // Lấy dữ liệu về
    {
        return $this->_ctdh->GETALL();
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        return $this->_ctdh->GETID($condition);
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        return $this->_ctdh->POST($data);
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        return $this->_ctdh->PUT($data, $condition);
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        return $this->_ctdh->DELETE($condition);
    }
}
