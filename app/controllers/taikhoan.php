<?php

/**
 * Summary of Taikhoan
 */
class Taikhoan extends Controller
{
    public $data = [];

    public function home() 
    {
        // add model
        $taikhoan = $this->model('taikhoanModel'); 
        $sanpham = $this->model('sanphamModel');
        // lay methol trong model
        $this->data['tk'] = $taikhoan->GETALL(); 
        $this->data['sp'] = $sanpham->GETALL(); 
       // render views
        $this->render('Product/ListProduct', $this->data);
    }

    public function idtk($id = '') // Ham su dung gia tri param
    {
        if (!empty($id)) {
              
            // add model
            $taikhoan = $this->model('taikhoanModel'); 
            // lay methol trong model
            $this->data['tkid'] = $taikhoan->GETID('TenDangNhap LIKE "%'.$id.'%"'); 
            // render views
            $this->render('Product/listid', $this->data);            

        } else {
            return false;
        }
    }

    // echo '<pre>';
    // print_r($this->_params);
    // echo '<pre>';

    // su dung ham post de up data
    // $_data = array(
    //     "TenDangNhap"=>"NguyenB",
    //     "HoTen"=>"Nguyễn Văn B",
    //     "DiaChi"=>"ABC/2/N",
    //     "SDT"=>"0903971381",
    //     "Email"=>"dankt2515@gmail.com",
    //     "Pass"=>"dankt15022000",
    //     "Quyen"=> ""
    // );
    // $query = $this->_taikhoan->POST($_data);
    // print_r($query);

}

?>