<?php
require_once "class/quantri.php";
$qt = new quantri();

$idLop = $_GET['idLop'];
$kq = $qt ->Lop_Xoa($idLop);
header('location: lop.php');
?>