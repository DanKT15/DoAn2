<?php 

class Model extends Database
{
    protected $db;
    private $_table; 

    public function __construct($_table)
    {
        $this->db = new Database();
        $this->_table = $_table;
    }

    public function POST($data=[]) // Tạo dữ liệu mới
    {
        $query = $this->db->insert($this->_table, $data);
        return $query;
    }

    public function GETALL() // Lấy dữ liệu về
    {
        $query = $this->db->select($this->_table);
        return $query;
    }

    public function GETID($condition = '') // Lấy dữ liệu về
    {
        $query = $this->db->select($this->_table, $condition);
        return $query;
    }

    public function PUT($data=[], $condition = '') // Cập nhật dữ liệu
    {
        $query = $this->db->update($this->_table, $data, $condition);
        return $query;
    }

    public function DELETE($condition = '') // Xóa dữ liệu
    {
        $query = $this->db->drop($this->_table, $condition);
        return $query;
    }
}

?>