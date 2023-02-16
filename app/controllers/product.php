<?php

class Product extends Controller
{
    public $data = [];

    public function index() 
    {
        $model_product = $this->model('ProductModel'); // add model
        $this->data['sanpham'] = $model_product->getlist(); // lay methol trong model

       // render views
       $this->render('Product/ListProduct', $this->data);
    }

    public function listID($id = 0) 
    {
        $model_product = $this->model('ProductModel'); // add model
        $this->data['id'] = $model_product->listid($id); // lay methol trong model
        
       // render views
       $this->render('Product/listid', $this->data);
    }

}