<!DOCTYPE html>
<html>
<head>
	<title>Informasi Obat</title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<body>
	
 <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Menu</header>
  <ul>
    <li><a href="homee.php"><i class="fas fa-qrcode"></i>Home</a></li>
    <li><a href="input.php"><i class="fas fa-plus-circle"></i>Tambah Data</a></li>
    <li><a href="#"><i class="fas fa-info"></i>Informasi</a></li>
    <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Sign OUT</a></li>
  </ul>
</div>
<section>
	<h3>Informasi Obat</h3>

<br>
<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			?><script type="text/javascript">
				alert('Data Telah Terupdate')
			</script><?php
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
?>
<br>
<table border="1" class="inf">
	<tr>
		<th>No</th>
		<th>Kode Produk</th>
		<th>Nama Produk</th>
		<th>Satuan</th>
		<th>Harga</th>
		<th>Dosis</th>
		<th>informasi</th>
		<th>+</th>
	</tr>
<?php 
		include "konek.php";
		$query_mysql = mysqli_query($conn,"select * from data ") or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['kode_obat']; ?></td>
			<td><?php echo $data['nama_obat']; ?></td>
			<td><?php echo $data['satuan']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['dosis']; ?></td>
			<td><?php echo $data['informasi']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['kode_obat']; ?>">Edit</a>
			</td>
		</tr>
		<?php } ?>
</table>
</body>
</html>