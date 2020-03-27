<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" href="stlog.css ">
</head>
<body>
	<form class="box"  action="ceklog.php" method="post" onsubmit="return cek()">
		<h1>LOGIN</h1>
		<div class="txtb">
			<input type="text" name="username" id="username" placeholder="Username">
			<br>
		</div>
		<br>
		<div class="txtb">
			<input type="password" name="password" id="password" placeholder="Password">
		</div>
		<br>
		<div >
			<input type="submit" value="Login"  class="btnl">
			<input type="reset" value="Batal" class="btnh">
		</div>
	</form>

</body>
<script type="text/javascript">
	function cek(){
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username !="" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus diisi')
			return false;
		}
	}
</script>
</html>