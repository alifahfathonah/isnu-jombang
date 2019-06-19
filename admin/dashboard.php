<?php
  include ('../config/koneksi.php');

  session_start();
    if(empty($_SESSION['username'])){
        header("location:../login/index.php");
    }else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<div class="card" style="width: 3rem;">
				<img src="../assets/gambar/header.png" class="card-img-top" alt="...">
			</div>
			<h4 class="text-white">Ikatan Sarjana Nahdlatul Ulama</h4>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right: 20px">Search</button>
				<hr>
				<button type="button" class="btn btn-secondary">Logout</button>
			</form>
		</div>
	</nav>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center"><i class="fa fa-list-ul"></i>MAIN MENU</h5>
						<hr>
						<ul class="list-group mt-4">
							<li class="list btn btn-danger text-center" type="button"><i class="fa fa-home"></i>Dashboard
							</li>
						</ul>
						<ul class="list-group mt-4">
							<li class="list btn btn-danger text-center" type="button"><i class="fa fa-users"></i>Anggota
							</li>
						</ul>
						<ul class="list-group mt-4">
							<li class="list btn btn-danger text-center" type="button"><i class="fa fa-out"></i>LOGOUT
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar -->
			<!-- form -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-body ">
					</div>
				</div>
			</div>
			<!-- akhir form -->
		</div>
	</div>
		<div class="footer bg-secondary text-center mt-5" style="color: white">
		  <div class="card-body">
		  <h5>Copyright © 2019 Bisma Labs, All Rights Reserved.</h5>
  		</div>
</body>
</html>
<?php
	}
?>