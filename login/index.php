<!DOCTYPE html>
<html>
<head>
	<title>ISNU - Login</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger'><center>Username atau Password Anda salah!</center></div>";
			}
			if($_GET['pesan']=="sukses"){
				echo "<div class='alert alert-success'><center>Registrasi berhasil, silahkan login</center></div>";
			}
		}
	?>
 
	<div class="container" style="width:50%">
		<br><br>
		<div class="jumbotron" style="50%;top:100px">
			<center>
				<h3>ISNU - LOGIN</h3>
				<br>
	 		</center>

			<form method="post" action="aksi-login.php" >
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username .." required="required">
	 
	 			<br>
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password .." required="required">
	 
	 			<br><br>
				<input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
	 
				<br>
				<center>
					<a href="../register/index.php">Register</a>
				</center>
			</form>
		</div>
	</div>
</body>
</html>