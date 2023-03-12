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

    public function controller($controller)
    {
        if (file_exists(dir.'/app/controllers/'.$controller.'.php')) {
            require_once dir.'/app/controllers/'.$controller.'.php';
            if (class_exists($controller)) {
                $controller = new $controller();
                return $controller;
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

    // --------------------------Session------------------------------------------------------------------------
    // Gán session (SET)
    public function session_set($key, $val){
        $_SESSION[$key] = $val;
    }
    
    // Lấy session (GET)
    public function session_get($key){
        return (isset($_SESSION[$key])) ? $_SESSION[$key] : false;
    }
    
    // Xóa session (DELETE)
    public function session_delete($key){
        if (isset($_SESSION[$key])){
            unset($_SESSION[$key]);
        }
    }

    // --------------------------Role------------------------------------------------------------------------
    // Hàm thiết lập là đã đăng nhập
    public function set_logged($username, $level){
        $this->session_set('ss_user_token', array(
            'TenDangNhap' => $username,
            'Quyen' => $level
        ));
    }
    
    // Hàm thiết lập đăng xuất
    public function set_logout(){
        $this->session_delete('ss_user_token');
    }
    
    // Hàm kiểm tra trạng thái người dùng đã đăng nhập chưa
    public function is_logged(){
        $user = $this->session_get('ss_user_token');
        return $user;
    }
    
    // Hàm kiểm tra có phải là admin hay không
    public function is_admin(){
        $user  = $this->is_logged();
        if (!empty($user['Quyen']) && $user['Quyen'] == '1'){
            return true;
        }
        return false;
    }

    // Lấy username người dùng hiện tại
    public function get_current_username(){
        $user  = $this->is_logged();
        return isset($user['TenDangNhap']) ? $user['TenDangNhap'] : '';
    }
    
    // Lấy level người dùng hiện tại
    public function get_current_level(){
        $user  = $this->is_logged();
        return isset($user['Quyen']) ? $user['Quyen'] : '';
    }

    // --------------------------Helper------------------------------------------------------------------------
    // Hàm lấy value từ $_POST
    public function input_post($key){
        return isset($_POST[$key]) ? trim($_POST[$key]) : false;
    }
    
    // Hàm lấy value từ $_GET
    public function input_get($key){
        return isset($_GET[$key]) ? trim($_GET[$key]) : false;
    }

    // Hàm redirect
    function redirect($url){
        header("Location:{$url}");
        exit();
    }

}

?>