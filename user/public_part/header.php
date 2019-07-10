<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ISNU Jombang</title>
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

    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container-fluid py-0 " role="banner" style="background-image: linear-gradient(to right, #11998e 0%, #38ef7d 100%);">
      <div class="container-fluid">
        <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="../index.php" class="text-white mb-0"><img src="../images/ISNU.png" width="150"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block text-white">
                Selamat datang,
                <?php
                  error_reporting(0);
                  session_start();
                  $username = $_SESSION['username'];
                  if(isset($_SESSION['username'])){
                      echo '
                      <li class="has-children">

                        <a href="#">'.$_SESSION['username'].'</a>
                        <ul class="dropdown">
                          <li><a href="../index.php">Home</a></li>
                          <li><a href="profil.php">Profil</a></li>
                          <li><a href="../logout.php">Logout</a></li>
                        </ul>
                      </li>
                      ';
                    
                  }else{
                    echo '<li><a href="login/login.php" class="cta"><span class="btn-success text-white rounded">Login</span></a></li>';
                  }
                ?>
                
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>
        </div>
        <!-- </div> -->
      </div>
    </header>
    
