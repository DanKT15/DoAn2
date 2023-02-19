<?php
//
class Product extends Controller
{
    public $product;
    public $data = [];

    public function __construct()
    {
        // add model
        $this->product = $this->model('ProductModel'); 
    }

    public function index() 
    {
        // lay methol trong model
        $this->data['sanpham'] = $this->product->getlist(); 

       // render views
        $this->render('Product/ListProduct', $this->data);
    }

    public function listID($id = 0) 
    {
        // lay methol trong model
        $this->data['id'] = $this->product->listid($id); 
        
       // render views
        $this->render('Product/listid', $this->data);
    }

}