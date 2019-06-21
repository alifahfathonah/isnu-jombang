<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');

	session_start();
	if(empty($_SESSION['username'])){
		header("location:../login/index.php");
	}else{
?>

<!-- content -->
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="offset-md-3 col-md-3" style="margin-top: 10px">
			<a href="" style="color: #000;text-decoration: none">
			<div class="card">
				<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
					<i class="fa fa-home"></i>
					<hr>
					HOME
				</div>
			</div>
			</a>
		</div>
		<div class="col-md-3" style="margin-top: 10px">
			<a href="profil.php" style="color: #000;text-decoration: none">
			<div class="card">
				<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
					<i class="fa fa-user"></i>
					<hr>
					PROFIL
				</div>
			</div>
			</a>
		</div>
	</div>
</div>
<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Isi Konten</h5>
					<p class="card-text"></p>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="card">
				<div class="card-header">
					About ISNU
				</div>
				<div class="card-body" style="font-size: 20px;">
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<i class="fas fa-camera btn btn-primary">Instagram</i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php
	include('part/footer.php');
	}
?>