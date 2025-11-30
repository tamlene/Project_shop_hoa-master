<?php
include("controllers/c_dang_nhap.php");

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$c_dang_nhap = new C_dang_nhap();
$c_dang_nhap->hien_thi_trang_dang_nhap();
?>