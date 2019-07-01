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

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      	<center>
      		<br>
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
      		<br>
      		<img src="../assets/gambar/ISNU.png" width="300">
      	</center>
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Silahkan Masuk</h5>
            <form method="post" action="aksi-login.php" class="form-signin">
              <div class="form-label-group">
                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Masukkan Username" required autofocus>
                <label for="inputEmail">Masukkan Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Masukkan Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Login</button>
              <hr class="my-4">
             <p>Belum punya akun? Daftar <a href="daftar.php">disini</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>


<!-- bg
<div class="bg-warning text-white" style="padding-top:200px; height: 700px">
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
			<div class="card" style="border-radius: 15px;">
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
?>  -->