<?php

class Home
{
    public function index()
    {
        echo 'Trang Chu';
    }

    public function test($id = '', $name = '') // them gia tri rong de ko loi params
    {
       echo 'id :'.$id.'<br>';
       echo 'name :'.$name;
    }
}
