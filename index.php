<?php
include("controllers/c_index.php");

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0); 
ini_set('log_errors', 1);
// ----------------------------------

session_start();

$c_index = new C_index();
$c_index->hien_thi_trang_index();
?>