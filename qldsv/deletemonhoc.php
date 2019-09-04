<?php
require_once "class/quantri.php";
$qt = new quantri();

$idMH = $_GET['idMH'];
$kq = $qt ->MH_Xoa($idMH);
header('location: monhoc.php');
?>