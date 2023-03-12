<?php

class Nsx extends Controller
{
    private $nsx;
    public $data = [];

    public function __construct()
    {
        $this->nsx = $this->model('nsxModel');
    }

    public function index() // GETALL
    {
        // lay methol trong model
        $this->data['nsx'] = $this->nsx->GETALL(); 
        // render views
        $this->render('Product/ListProduct', $this->data);
    }

    public function getid($id = '') // GETID 
    {
        if (!empty($id)) {
              
            // lay methol trong model
            $this->data['nsx'] = $this->nsx->GETID($id); 
            // render views
            $this->render('Product/ListProduct', $this->data);

        } else {
            $this->render('errors/404');
        }
    }

    public function themtk() // Ham su dung gia tri param
    { 
        // lay du lieu tu input form
        if (isset($_POST['submit'])) {
            $_data = array(
                "HoTen"=> $_POST['a'],
                "DiaChi"=> $_POST['a'],
                "SDT"=> $_POST['a'],
                "Email"=> $_POST['a'],
                "Pass"=> $_POST['a'],
                "Quyen"=> $_POST['a']
            );
            $query = $this->nsx->POST($_data);
            if ($query) {
                // load trang
                // $this->redirect($url);
            }
        }
        // render views form
        $this->render('Product/ListProduct', $this->data);
    }

    public function suatk($id = '') // Ham su dung gia tri param
    {
        if (!empty($id)) {
            
            if (isset($_POST['submit'])) {
                $_data = array(
                    "HoTen"=> $_POST['a'],
                    "DiaChi"=> $_POST['a'],
                    "SDT"=> $_POST['a'],
                    "Email"=> $_POST['a'],
                    "Pass"=> $_POST['a'],
                    "Quyen"=> $_POST['a']
                );
                $query = $this->nsx->PUT($_data, $id);
                if ($query) {
                    // load trang
                    // $this->redirect($url);
                }
            }

        } else {
            $this->render('errors/404');
        }
        // lay data tu row can sua de hien thi 
        $this->data['nsx'] = $this->nsx->GETID($id);
        // render views form
        $this->render('Product/ListProduct', $this->data);
    }

    public function xoatk($id = '') // ko render
    {
        if (!empty($id)) {
              
            // lay methol trong model
            $query = $this->nsx->DELETE($id); 
            // load trang
            // $this->redirect($url);            

        } else {
            $this->render('errors/404');
        }
    }

}

?>