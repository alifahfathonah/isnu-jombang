<?php 
  include 'config/koneksi.php';
  $id_info = $_GET["id_info"];
  $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori WHERE id_info=$id_info");
  foreach($qTampil as $row){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ISNU Jombang</title>
    <link rel="icon" href="images/header.png">
    <meta name="author" content="Isnu Jombang">
    <meta name="description" content="Ikatan Sarjana Nahdlatul Ulama Jombang">
    <meta name="keywords" content='Isnu, Jombang, Jawa Timur, Ikatan Sarjana Nahdlatul Ulama, Ikatan Sarjana Nahdlatul Ulama Jombang, Isnu Jombang, Organisasi Isnu' />

    <meta property="og:title" content="ISNU Jombang - Ikatan Sarjana Nahdlatul Ulama Jombang" />
    <meta property="og:description" content="Ikatan Sarjana Nahdlatul Ulama Jombang" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="google-site-verification=z0XYBHIWm7l6MJF6hPuhJ_4iP8Tv1IkamAbIG3-2Qlk" />

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

    <style type="text/css">
      .category {
        font-size: 13px;
        display: inline-block;
        padding: 5px 20px;
        background: #e9ecef;
        border-radius: 30px;
        color: #000;
        font-weight: bold;
      }
      #custom-search-input{
          padding: 3px;
          border: solid 1px #E4E4E4;
          border-radius: 6px;
          background-color: #fff;
      }

      #custom-search-input input{
          border: 0;
          box-shadow: none;
      }

      #custom-search-input button{
          margin: 10px 0 0 0;
          background: none;
          box-shadow: none;
          border: 0;
          color: #666666;
          padding: 0 0px 0 10px;
          border-left: solid 1px #ccc;
      }

      #custom-search-input button:hover{
          border: 0;
          box-shadow: none;
          border-left: solid 1px #ccc;
      }

      #custom-search-input .icon-search{
          font-size: 25px;
      }
    </style>
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
    
    <header class="site-navbar container-fluid py-0 " role="banner" style="background-image: linear-gradient(to left, #134E5E 0%, #71B280 100%); position: fixed; border-radius: 0px;">
      <div class="container">
        <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="text-white mb-0"><img src="images/ISNU.png" width="150"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block text-white">
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="info.php">INFO ISNU</a></li>
                <li><a href="anggota.php">DAFTAR ANGGOTA</a></li>
                <li><a href="tentang.php">TENTANG ISNU</a></li>
                <?php
                  error_reporting(0);
                  session_start();
                  $username = $_SESSION['username'];
                  if(isset($_SESSION['username'])){
                      echo '
                      <li class="has-children">

                        <a href="#">'.$_SESSION['username'].'</a>
                        <ul class="dropdown" style="right: 10px;">
                          <li><a href="user/profil.php"><i class="icon-address-card"></i> Profil</a></li>
                          <li><a href="user/setting.php"><i class="icon-gear"></i> Setting</a></li>
                          <li><a href=".logout.php"><i class="icon-sign-out"></i> Logout</a></li>
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
    

     
<br><br>
  <div class="site-section">
      <div class="container">
        <div class="row">
            <div class="col-md-8 d-block d-md-flex listing vertical lh-content" style=" top:1px;  bottom: 130px;">
              <br>
              <h2><b><?php echo $row['judul'];?></b></h2><br>
                <p class="color-black-opacity-5" style="float: left;">

                  <a class="category" href="kategori.php?kategori=<?php echo $row['kategori']; ?>"><?php echo $row['nama_kategori'];?></a>

                  
                    <i class="fas fa-calendar-alt"></i> <?php echo $row['tanggal']; ?>
                  
                  <small style="margin-left: 15px; font-size: 15px;">
                    <i class="fas fa-user"></i> ISNU Jombang
                  </small>
                    <div style="float: right;"> 
                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#3B5998;margin:1px;" title="Bagikan ke Facebbok"><i class="icon-facebook" style="color:#fff"></i> <span style="color:#fff">Facebook</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#55acee;margin:1px;" title="Bagikan ke Twitter"><i class="icon-twitter" style="color:#fff"></i> <span style="color:#fff">Tweet</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:green;margin:1px;" title="Bagikan ke WhatsApp"><i class="icon-whatsapp" style="color:#fff"></i> <span style="color:#fff">WhatsApp</span></a>
                    </div>
                </p>
                

              

              <img src="admin/img/<?php echo $row['img']; ?>" alt="Image" class="img-fluid" style="width: 100%;">

              <p>
                <?php echo $row['isi'];?>
              </p>

              <div class="post-author">
                <div class="media">
                  <div class="media-body">
                    <ul class="author-social">
                      Share :
                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#3B5998;margin:1px;" title="Bagikan ke Facebbok"><i class="icon-facebook" style="color:#fff"></i> <span style="color:#fff">Facebook</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:#55acee;margin:1px;" title="Bagikan ke Twitter"><i class="icon-twitter" style="color:#fff"></i> <span style="color:#fff">Tweet</span></a>

                      <a href="" target="_BLANK" class="btn waves-effect waves-light" style="background-color:green;margin:1px;" title="Bagikan ke WhatsApp"><i class="icon-whatsapp" style="color:#fff"></i> <span style="color:#fff">WhatsApp</span></a>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            
            <?php } ?>
            
            <!-- side bar-->
        
          <div class="col-lg-4 ml-auto">
            <div class="mb-5">
              <div class="d-block d-md-flex listing">
                <div class="lh-content">
                  <form id="custom-search-input" method="post" action="cari.php">
                      <div class="input-group col-md-12">
                          <input type="text" name="search" class="form-control input-lg" placeholder="Cari Info Disini" required />
                          <span class="input-group-btn">
                              <button type="submit">
                                  <i class="icon-search"></i>
                              </button>
                          </span>
                      </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="mb-5">
              <div class="d-block d-md-flex listing bg-success">
                <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-bell"></i> INFO POPULER</h2>
              </div>
              <div class="widget-content popular-posts">
                <ul>
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori where kategori='1' order by id_info desc limit 10");
                    foreach($qTampil as $row){
                  ?>
                  <li>
                    <div class="item-thumbnail">
                      <img class="circle" src="admin/img/<?php echo $row['img']; ?>" height="72" width="72">
                      <span>
                        <a href="info_detail.php?id_info=<?php echo $row['id_info']; ?>"><?php echo $row['judul']; ?></a>
                      </span>
                    </div>
                  </li>
                <?php } ?>
                </ul>
              </div>

              <br><br>
              <div class="d-block d-md-flex listing bg-success">
                <h2 class="lh-content text-white" style="font-weight: bold; font-size: 20px;"><i class="icon-tag"></i> KATEGORI</h2>
              </div>
              <div class="d-block d-md-flex listing">
                <div class="lh-content">
                  <?php 
                    include 'config/koneksi.php';
                    $qTampil = mysqli_query($connect, "SELECT * FROM kategori_info");
                    foreach($qTampil as $row){
                  ?>
                  <a href="kategori.php?kategori=<?php echo $row['id_kategori']; ?>">
                      <span class="category"><i class="icon-tag"></i> <?php echo $row['nama_kategori']; ?></span>
                    </a>
                <?php } ?>
                </div>
              </div>
            </div>
          </div>

            <div class="col-md-8 d-block d-md-flex listing vertical lh-content">
              <h2 class="lh-content" style="font-weight: bold; font-size: 20px;"><i class="icon-comment"></i> KOMENTAR</h2>
              
            </div>
        </div>
      </div>
    </div> 
<?php include 'public_part/footer.php';?>