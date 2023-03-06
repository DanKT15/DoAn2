<?php

class Controller
{
    public function model($model)
    {
        if (file_exists(dir.'/app/models/'.$model.'.php')) {
            require_once dir.'/app/models/'.$model.'.php';
            if (class_exists($model)) {
                $model = new $model();
                return $model;
            }
        }
        else {
            return false;
        }
    }
    
    public function render($view, $data = [])
    {
        extract($data); // nhận một mảng array và coi các key như là các tên biến
        if (file_exists(dir.'/app/views/'.$view.'.php')) {
            require_once dir.'/app/views/'.$view.'.php';
        }
    }
}
