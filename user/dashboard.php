<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
	include ('part/img-header.php');
	include ('part/menu.php');

	session_start();
	if(empty($_SESSION['username'])){
		header("location:../login/index.php");
	}else{
?>

<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Isi Konten</h5>
					<p class="card-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
		<?php
			include('part/sidecard.php');
		?>
	</div>
</div>
<!-- end content -->

<?php
	include('part/footer.php');
	}
?>