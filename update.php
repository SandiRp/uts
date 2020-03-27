<?php 
 
include 'konek.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['harga'];
$pekerjaan = $_POST['dosis'];
 
mysqli_query($conn,"UPDATE data SET nama_obat='$nama', harga='$alamat', dosis='$pekerjaan' WHERE kode_obat='$id'");
 
header("location:informasi.php?pesan=update");
 
?>