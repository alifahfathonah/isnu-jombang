<!DOCTYPE html>
<html>
<head>
	<title>ISNU - Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<br><br>
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger'>Username atau Password Anda salah!</div>";
			}
			if($_GET['pesan']=="sukses"){
				echo "<div class='alert alert-success'>Registrasi berhasil, silahkan login</div>";
			}
		}
	?>
 
	<div class="kotak_login" style="width:600px;">
		<div class="container" style="width:500px;">
			<center>
				<h3>ISNU - LOGIN</h3>
				<br>
	 		</center>

			<form method="post" action="cek_login.php" >
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
	 
	 			<br>
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password .." required="required">
	 
	 			<br>
				<input type="submit" class="tombol_login_register" value="LOGIN">
	 
				<br><br>
				<center>
					<a class="link" href="register.php">Register</a>
				</center>
			</form>
		</div>
	</div>
</body>
</html>