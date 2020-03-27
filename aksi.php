<?php
include 'konek.php';
$kode = $_POST['kode'];
$nama = $_POST['namao'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$dosis = $_POST['dosis'];
$infor = $_POST['info'];

mysqli_query($conn,"INSERT INTO `data` VALUES ('$kode','$nama','$satuan','$harga','$dosis','$infor')");

header("location:input.php");
?>