<?php 
    $configDB = array();
    $configDB["host"]           = "localhost";
    $configDB["database"]       = "shopping";
    $configDB["username"]       = "root";
    $configDB["password"]        = "";
    define("HOST", "localhost");
    define("DB_NAME", "shopping");
    define("DB_USER", "root");
    define("DB_PASS", "");
    define('ROOT', dirname(dirname(__FILE__)));
    
    define("BASE_URL", "http://" . $_SERVER['SERVER_NAME'] ."/public/index.php"); 
?>