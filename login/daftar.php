<?php
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
                            echo "<div class='alert alert-danger'><center>Username tersebut sudah digunakan!</center></div>";
                        }
                    }
                ?>
            <br>
            <img src="../images/ISNU.png" width="300">
        </center>
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Silahkan Daftar</h5>
            <form method="post" action="aksi-daftar.php" class="form-signin">
              <div class="form-label-group">
                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Buat Username" required autofocus>
                <label for="inputEmail">Buat Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Buat Password" required>
                <label for="inputPassword">Buat Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <input type="hidden" name="img" id="inputPassword" class="form-control" value="avatar.png">

              <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Daftar</button>
              <hr class="my-4">
             <p>Sudah punya akun? Login <a href="login.php">disini</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>