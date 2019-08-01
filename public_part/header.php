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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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

    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
       $("#load").click(function(){
        loadmore();
       });
      });

      function loadmore()
      {
       var val = document.getElementById("result_no").value;
       $.ajax({
       type: 'post',
       url: 'kontent.php',
       data: {
        getresult:val
       },
       success: function (response) {
        var content = document.getElementById("result_para");
        content.innerHTML = content.innerHTML+response;

        document.getElementById("result_no").value = Number(val)+4;
       }
       });
      }
    </script>
    <style type="text/css">
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
    
    <header class="site-navbar container py-0 " role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo" style="top: 10px;">
                <a href="index.php" class="text-white mb-0"><img src="images/ISNU.png" width="150"></a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="info.php">INFO ISNU</a></li>
                <li><a href="anggota.php">DAFTAR ANGGOTA</a></li>
                <li><a href="tentang.php">TENTANG ISNU</a></li>
                <?php
                  error_reporting(0);
                  session_start();
                  if(isset($_SESSION['username'])){
                      echo '
                      <li class="has-children">
                        <a href="#"><span class="border-left pl-xl-4"></span>'.$_SESSION['username'].'</a>
                        <ul class="dropdown">
                          <li><a href="user/profil.php">Profil</a></li>
                          <li><a href="logout.php">Logout</a></li>
                        </ul>
                      </li>
                      ';
                  }elseif  (isset($_SESSION['admin'])) {
                    echo '
                      <li class="has-children">
                        <a href="#"><span class="border-left pl-xl-4"></span>'.$_SESSION['admin'].'</a>
                        <ul class="dropdown">
                          <li><a href="admin/index.php">Admin</a></li>
                          <li><a href="admin/logout.php">Logout</a></li>
                        </ul>
                      </li>
                    ';
                  }else{
                    echo '<li><a href="login/login.php" class="cta"><span class="btn-success text-white rounded">LOGIN</span></a></li>';
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
      
    </header>
