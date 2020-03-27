<!DOCTYPE html>
<html>
<head>
	<title>Edit DAta</title>
	<link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
	
	
 
	

	<form action="update.php" method="post" class="box">		
		<table>
			<h3>Edit data</h3>
			<?php 
			include "konek.php";
			$id = $_GET['id'];
			$query_mysql = mysqli_query($conn,"select * from data where kode_obat='$id'") or die(mysql_error());
			$nomor = 1;
			while($data = mysqli_fetch_array($query_mysql)){
			?>
			<tr>
				<td>Nama Obat</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['kode_obat'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama_obat'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>					
			</tr>	
			<tr>
				<td>Dosis</td>
				<td><input type="text" name="dosis" value="<?php echo $data['dosis'] ?>"></td>					
			</tr>	
			<tr>
				<td>Informasi</td>
				<td><input type="text" name="inform" value="<?php echo $data['informasi'] ?>"></td>					
			</tr>
			<tr >
				<td colspan="2"><input type="submit" value="Simpan" class="spn"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>