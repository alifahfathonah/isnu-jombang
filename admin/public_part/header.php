<?php
  session_start();
  include '../config/koneksi.php';
  if(empty($_SESSION['admin'])){
      header("location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin | ISNU Jombang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link rel="stylesheet" href="../css/rangeslider.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/color.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <style type="text/css">
      
    </style>

    
  </head>
  <body id="bg">
  
  <div class="site-wrap">

      <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-success">
        <span id="sidebarCollapse" class="navbar-toggler-icon leftmenutrigger"></span>
        <a class="navbar-brand" href="../index.php"><img src="../images/ISNU.png" width="100"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          
          <ul class="navbar-nav ml-md-auto d-md-flex">
            <li class="nav-item ">
              <div class="nav-link" style="color: #fbfbfb;">
              Selamat Datang, 
              <?php
                  error_reporting(0);
                  session_start();
                  $username = $_SESSION['admin'];
                  if(isset($_SESSION['admin'])){
                    echo $_SESSION['admin'];
                  }
              ?>
            </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="logout.php" style="color: #fbfbfb;"><i class="icon-sign-out"></i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>


    <!-- Vertical navbar -->
    <div class="vertical-nav bg-light" id="sidebar">
      <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="../images/avatar.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
          <div class="media-body">
            <h4 class="m-0">ADMIN</h4>
            <p class="font-weight-light text-muted mb-0">Administrator ISNU</p>
          </div>
        </div>
      </div>
      <hr>
      <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 bg-light">MENU</p>

      <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
          <a href="index.php" class="nav-link text-dark bg-light">
            <i class="icon-dashboard mr-3 text-primary fa-fw"></i>
            HOME
          </a>
        </li>
        <li class="nav-item">
          <a href="data_anggota.php" class="nav-link text-dark bg-light">
            <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
            DATA ANGGOTA
          </a>
        </li>
        <li class="nav-item">
          <a href="post.php" class="nav-link text-dark bg-light">
            <i class="icon-newspaper-o mr-3 text-primary fa-fw"></i>
            POST
          </a>
        </li>
        <li class="nav-item">
          <a href="kategori_post.php" class="nav-link text-dark bg-light">
            <i class="icon-tag mr-3 text-primary fa-fw"></i>
            KATEGORI POST
          </a>
        </li>
      </ul>

      <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0 bg-light">LAINNYA</p>

      <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
          <a href="#" class="nav-link text-dark bg-light">
            <i class="icon-gear mr-3 text-primary fa-fw"></i>
            SETTING
          </a>
        </li>
        <li class="nav-item">
          <a href="../index.php" target="_blank" class="nav-link text-dark bg-light">
            <i class="icon-globe mr-3 text-primary fa-fw"></i>
            HALAMAN DEPAN
          </a>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link text-dark bg-light">
            <i class="icon-sign-out mr-3 text-primary fa-fw"></i>
            LOGOUT
          </a>
        </li>
      </ul>
    </div>
    <!-- End vertical navbar -->

















    <!-- ///Tampilan heder lama /////

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>    
    <header class="site-navbar container-fluid py-0 " role="banner" style="background-color: #4ac363;">
      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><img src="../images/ISNU.png" width="150"></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block text-white">
                Selamat datang,
                <?php
                  error_reporting(0);
                  session_start();
                  $username = $_SESSION['admin'];
                  if(isset($_SESSION['admin'])){
                      echo '
                      <li class="has-children">
                        <a href="#">'.$_SESSION['admin'].'</a>
                        <ul class="dropdown">
                          <li><a href="../index.php">Halaman Depan</a></li>
                          <li><a href="logout.php">Logout</a></li>
                        </ul>
                      </li>
                      ';
                    
                  }else{
                    echo '<li><a href="login/login.php" class="cta"><span class="bg-success text-white rounded">Login</span></a></li>';
                  }
                ?>
                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
    </header>
  -->
