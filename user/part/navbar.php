<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<div class="card" style="width: 3rem;">
			<a href="../index.php">
				<img src="../assets/gambar/header.png" class="card-img-top" alt="...">
			</a>
		</div>
		<h4 class="text-white">Ikatan Sarjana Nahdlatul Ulama</h4>

		<div class="text-white">
			<?php 
				$username = $_SESSION['username'];
				if(isset($_SESSION['username'])){
				 	if(isset($_SESSION['user'])){
				 		echo "Selamat Datang, <a href='profil.php'>";
						echo $_SESSION['username'];
						echo "</a> <a href='../logout.php' class='btn btn-danger'> logout</a>";
					}
				}
			?>
		</div>
	</div>
</nav>
<!-- akhir navbar -->