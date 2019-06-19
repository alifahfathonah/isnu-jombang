<!DOCTYPE html>  
<html>  
<head>  
    <title>Daftar</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>  
<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
        <h3 style="color: white">Daftar</h3>
        <form class="form-inline">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Sosmed</button>
        </form>
    </nav>
    <!-- akhir navbar -->
    <!-- bg -->
    <div class="bg-warning text-white" style="padding-top:200px; height: 660px">
        <!-- daftar -->
        <div class="container" style="width:50%">
            <div>
                <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo "<div class='alert alert-danger'><center>Username tersebut sudah digunakan!</center></div>";
                        }
                    }
                ?>
                <center>
                    <h3 style="color: black">DAFTAR</h3>
                    <br>
                </center>
                <form method="post" action="aksi-daftar.php">
                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="required">  
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="required">                     
                    <br><br>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="DAFTAR">         
                    <br>
                    <center>
                        <a href="index.php">LOGIN</a>
                    </center> 
                </form>
            </div>
        </div>
        <!-- akhir login -->
    </div>  
</body>  
</html> 