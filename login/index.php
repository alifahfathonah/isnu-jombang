<!DOCTYPE html>
<html>
<head>
	<title>ISNU - Login</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-dark bg-dark">
  		<h3 style="color: white">ISNU-Login</h3>
  		<form class="form-inline">
    		<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sosmed</button>
  		</form>
	</nav>
	<!-- akhir navbar -->
	<!-- bg -->
 	<div class="p-3 mb-2 bg-primary text-white">
	 	<!-- login -->
		<div class="container" style="width:50%">
			<br><br><br><br>
			<div class="jumbotron">
				<?php 
					if(isset($_GET['pesan'])){
						if($_GET['pesan']=="gagal"){
							echo "<div class='alert alert-danger'><center>Username atau Password Anda salah!</center></div>";
						}
						if($_GET['pesan']=="sukses"){
							echo "<div class='alert alert-success'><center>Berhasil daftar, silahkan login!</center></div>";
						}
					}
				?>
				<center>
					<h3 style="color: black">ISNU - LOGIN</h3>
					<br>
		 		</center>
				<form method="post" action="aksi-login.php" >
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="required">
		  			<br>
					<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="required">
		  			<br><br>
					<input type="submit" class="btn btn-primary btn-lg btn-block" value="LOGIN">
		 			<br>
					<center>
						<a href="daftar.php">Daftar</a>
					</center>
				</form>
			</div>
		</div>
		<!-- akhir login -->
	</div>
</body>
</html>