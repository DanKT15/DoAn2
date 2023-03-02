<?php

class taikhoanModel extends Model
{
    private $_table = 'taikhoan';

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        $query = $this->db->insert($this->_table, $data)->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function GETALL() // Lấy dữ liệu về
    {
        $query = $this->db->query("SELECT * FROM $this->_table")->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        $query = $this->db->query("SELECT * FROM $this->_table WHERE $condition")->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        $query = $this->db->update($this->_table, $data, $condition = '')->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        $query = $this->db->delete($this->_table, $condition = '')->fetchAll(PDO::FETCH_ASSOC);
        return $query;
    }
}
