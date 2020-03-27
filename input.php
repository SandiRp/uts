<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta charset="utf-8">
<link rel="stylesheet" href="stinp.css">
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
    <li><a href="Informasi.php"><i class="fas fa-info"></i>Infromasi</a></li>
     <li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Sign OUT</a></li>
  </ul>
</div>
<section>
<form action="aksi.php" method="post" class="inp" onsubmit="return cek()">
		<h3>Input Data</h3>
		<br>
		<div class="put">
			<input type="text" name="kode" id="kode" placeholder="Kode Produk">
		</div>
		<br>
		<div class="put">
			<input type="text" name="namao"  id="namao" placeholder="Nama Produk">
		</div>
		<div class="put">
				<select name="satuan">
				<option>Tablet</option>
				<option>Kapsul</option>
				<option>Botol</option>
				<option>Box</option>
				</select>
		</div>
		<br>
		<div class="put">
			<input type="text" name="harga" id="harga" placeholder="Harga">
		</div>
		<br>	
		<div class="put">
			<input type="text" name="dosis" id="dosis" placeholder="Dosis">
		</div>
		<br>
		<div class="put">	
			<input type="text" name="info" id="info" placeholder="Informasi Produk">
		</div>
		<br>
		<div class="put">	
			<input type="submit" value="Tambah" name="simpan" class="spn">
		</div>
		<br>
		<div class="out">
			<input type="reset" value="Hapus" name="hapus" class="hps">
		</div>
</form>
</section>
</body>
<script type="text/javascript">
	function cek(){
		var kode = document.getElementById("kode").value;
		var nama = document.getElementById("namao").value;
		var har = document.getElementById("harga").value;
		var dos = document.getElementById("dosis").value;
		var inf = document.getElementById("info").value;
		if (kode !="" && nama!="" && har!="" && dos!="" && inf!="") {
			alert('Data Berhasil ditambah,Terima Kasih')
			return true;

		}else{
			alert('Data Harus Diisi Semua,Silahkan Diisi lagi')
			return false;
		}
	}
</script>
</html>