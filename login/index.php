<?php
	session_start();

	if(isset($_SESSION['username'])){
	 	if(isset($_SESSION['admin'])){
	 		header('location:../admin/index.php');
		}else if(isset($_SESSION['user'])){
		 	header('location:../user/index.php');
		}
	}else{
	    include ('part/header.php');
?> 

<!-- bg -->
<div class="bg-warning text-white" style="padding-top:200px; height: 660px">
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
			<div class="card col-md-12">
				<div class="card-body">
   					<center>
						<h3 style="color: black; padding-bottom: 20px">ISNU - Login</h3>
			 		</center>

					<form method="post" action="aksi-login.php" >
						<input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="required"><div style="padding-bottom: 20px"></div>

						<input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="required"><div style="padding-bottom: 20px"></div>
						
						<input type="submit" class="btn btn-primary btn-md btn-block" value="LOGIN">
						<div style="padding-bottom: 20px"></div>
						<center>
							<a href="daftar.php">DAFTAR</a>
						</center>
					</form>
  				</div>
			</div>
		</div>
	</div>
</div>
<?php
    	include ('part/footer.php');
    }
?> 