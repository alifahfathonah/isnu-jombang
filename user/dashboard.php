<?php
  include ('../config/koneksi.php');

  session_start();
    if(empty($_SESSION['username'])){
        header("location:../login/index.php");
    }else{
?>
<!DOCTYPE html>
<html>
<head>
  <title>Halaman Utama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body style="background: #F1F1F1">
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <h4 class="text-white">Ikatan Sarjana Nahdlatul Ulama</h4>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right: 20px">Search</button>
          <hr>
          <button type="button" class="btn btn-secondary" onclick="window.location.href='../logout.php'">Logout</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- content -->
<div class="container-fluid col-md-12 bg-success">
  <div class="jumbotron col-md-12 bg-success">
    <div class="text-center">
      <img src="../assets/gambar/ISNU.png" class="rounded" alt="...">
    </div>
  </div>
</div>

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
          <?php
          $username = $_SESSION['username'];
//            $q = "SELECT A.*,B.* FROM users AS A RIGHT JOIN anggota AS B ON A.id_user = B.id_user WHERE A.username = '$username' ";

            $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM users AS A RIGHT JOIN anggota AS B ON A.id_user = B.id_user WHERE A.username = '$username' ");
          foreach($qTampil as $row){
            echo $row['nama'];
          }
          ?>
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

  <div class="footer bg-secondary text-center mt-5" style="color: white">
    <div class="card-body">
      <h5>Copyright © 2019 Bisma Labs, All Rights Reserved.</h5>
    </div>
  </div>
</body>
</html>
<?php
  }
?>