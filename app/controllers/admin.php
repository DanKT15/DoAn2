<?php

class Admin extends Controller
{
    public $data = [];

    // public function __construct() // kiểm tra quyền quản trị
    // {
    //     // kiểm tra đăng nhập 
    //     $trangthai = $this->is_logged();
    //     if (!empty($trangthai)) {
    //         // kiểm tra admin hay user
    //         if ($this->is_admin() == false) {
    //             $this->redirect('http://localhost/DoAn2/taikhoan');
    //         }
    //     }else {
    //         $this->redirect('http://localhost/DoAn2/taikhoan');
    //     }
    // }

    public function index() 
    {

        $this->render('Admin/header');
        $this->render('Admin/menu');
        $this->render('Admin/category/add_category');
        $this->render('Admin/footer');

    }

    public function account($action = 'index', $id = '') // tài khoản
    {
        $controller = $this->controller('taikhoan');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

    public function product($action = 'index', $id = '') // sản phẩm
    {
        $controller = $this->controller('sanpham');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

    public function category($action = 'index', $id = '') // danh mục
    {
        $controller = $this->controller('danhmuc');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

    public function provider($action = 'index', $id = '') // nhà cung cấp
    {
        $controller = $this->controller('nhacungcap');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

    public function order($action = 'index', $id = '') // đơn hàng
    {
        $controller = $this->controller('donhang');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

    public function details($action = 'index', $id = '') // chi tiết đơn hàng
    {
        $controller = $this->controller('ctdh');
        if (!empty($action)) {
            switch ($action) {    
                case "index" : $controller->index(); break;
                case "get": 
                    if (!empty($id)) {
                        $controller->getid($id); break;
                    } else {
                        break;
                    }
                case "post": $controller->themtk(); break;
                case "put": 
                    if (!empty($id)) {
                        $controller->suatk($id); break;
                    } else {
                        break;
                    }                    
                case "delete": 
                    if (!empty($id)) {
                        $controller->xoatk($id); break;
                    } else {
                        break;
                    }
            }        
        } else {
            $this->render('errors/404');
        }
    }

}

?>