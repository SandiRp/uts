<?php  
include 'konek.php';

$username = $_POST['username'];
$password = $_POST['password'];


$log = mysqli_query($conn,"select * from admin where username = '$username' and password = '$password' ");
$cek = mysqli_num_rows($log);

if ($cek > 0) {
	header("location:homee.php");
}else{
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="refresh" content="2; url=http://localhost/12/New folder/login.php">
	</head>
	<body>
		<center>
	<h1>maaf username atau password salah
	Tunggu sebentar</h1>
	</center>
	</body>
	</html>
<?php
}
?>