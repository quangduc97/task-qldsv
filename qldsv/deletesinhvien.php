<?php
require_once "class/quantri.php";
$qt = new quantri();

$idSV = $_GET['idSV'];
$kq = $qt ->SV_Xoa($idSV);
header('location: sinhvien.php');
?>