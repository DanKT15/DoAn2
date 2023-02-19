<?php

define('dir', __DIR__);

require_once 'configs/routers.php';
require_once 'configs/database.php';
require_once 'core/Routers.php';
require_once 'app/App.php';

if (!empty($config['database'])) 
{
    $db_config = array_filter($config['database']);

    if (!empty($db_config)) 
    {
        require_once 'core/Connection.php';
        require_once 'core/Database.php';

        // $db = new Database();
        // $query = $db->query("SELECT * FROM danhmuc WHERE 1")->fetchAll(PDO::FETCH_ASSOC);;
        // print_r($query);

    }
}

require_once 'core/Model.php';
require_once 'core/Controller.php';




