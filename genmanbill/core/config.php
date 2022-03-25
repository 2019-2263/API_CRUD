<?php

$db_user = 'root';
$db_password = '';
$db_name = 'dbgenmanbill';
$db = new PDO('mysql:host=127.0.0.1;dbname=dbgenmanbill;charset=utf8', $db_user, $db_password);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute (PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("set names utf8");



?>
<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set('Asia/Manila');
ini_set('memory_limit', '512M');
        //Start Session
        session_start();
        //Create constant to store reapting value
        define('SITEURL', 'http://localhost/genmanbill/');
        define('LOCALHOST', 'localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','dbgenmanbill');

        $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //database connection
        $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //selecting my database



?>
