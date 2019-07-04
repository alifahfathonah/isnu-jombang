<?php
	session_start();
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
      		<img src="../images/ISNU.png" width="300">
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
        <center class="text-white">Copyright © 2019 Bisma Labs, All Rights Reserved.</center><br>
      </div>
    </div>
</div>



<?php
    	include ('part/footer.php');
?>