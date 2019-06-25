<?php
    include ('part/cek-session.php');
    include ('part/header.php');
?> 

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
                <div class="card col-md-12">
                    <div class="card-body">
                        <center>
                            <h3 style="color: black; padding-bottom: 20px">ISNU - Daftar</h3>
                        </center>

                        <form method="post" action="aksi-daftar.php" >
                            <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required="required"><div style="padding-bottom: 20px"></div>
                            <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required="required"><div style="padding-bottom: 20px"></div>
                            <input type="submit" class="btn btn-primary btn-md btn-block" value="DAFTAR">
                            <div style="padding-bottom: 20px"></div>
                            <center>    
                                <a href="index.php">LOGIN</a>
                            </center>
                        </form>
                  </div>
                </div>
            </div>
        </div>
        <!-- akhir login -->
    </div>  
<?php
    include ('part/footer.php');
?> 