<?php
	include ('part/akses.php');
  	include ('../config/koneksi.php');
  	include ('part/header.php');
  	include ('part/navbar.php');
?>
<div class="container-fluid" style="margin-top: 100px; min-height: 100vh">
	<div class="row">
		<?php
			include ('part/sidebar.php');
		?>
		<!-- form -->
		<div class="col-md-9">
			<div class="card">
				<div class="card-body ">
					LOREM IPSUM
				</div>
			</div>
		</div>
		<!-- akhir form -->
	</div>
</div>
<?php
	include ('part/footer.php');
?>