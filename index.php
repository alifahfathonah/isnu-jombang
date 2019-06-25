<?php
	include ('public_part/header.php');
	include ('public_part/navbar.php');
?>

<!-- menu -->
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3" style="margin-top: 10px">
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
			<a href="anggota.php" style="color: #000;text-decoration: none">
			<div class="card">
				<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
					<i class="fa fa-list-ul"></i>
					<hr>
					ANGGOTA
				</div>
			</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="login/index.php" style="color: #000;text-decoration: none">
			<div class="card">
				<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
					<i class="fa fa-sign-in-alt"></i>
					<hr>
					LOGIN 
				</div>
			</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="login/daftar.php" style="color: #000;text-decoration: none">
			<div class="card">
				<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
					<i class="fa fa-user-plus"></i>
					<hr>
					DAFTAR 
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
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
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
					<i class="fas fa-camera btn btn-primary"> Social Media</i>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php
	include('public_part/footer.php');
?>