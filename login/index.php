<?php
    include ('part/header.php');
	include ('part/navbar.php');
?> 

	<!-- bg -->
 	<div class="bg-warning text-white" style="padding-top:200px; height: 660px">
	 	<!-- login -->
		<div class="container" style="width:50%">
			<div>
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
						<a href="daftar.php">DAFTAR</a>
					</center>
				</form>
			</div>
		</div>
		<!-- akhir login -->
	</div>
<?php
    include ('part/footer.php');
?> 