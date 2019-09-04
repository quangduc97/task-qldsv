<?php
require_once "class/quantri.php";
$qt = new quantri();

$idSV = $_GET['idSV'];
$idMH = $_GET['idMH'];
$kq = $qt ->Diem_Xoa($idSV, $idMH);
header('location: dssvdkmh.php');
?>