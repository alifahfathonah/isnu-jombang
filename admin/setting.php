<?php
	include 'public_part/header.php';
?>
<br>
	 <div class="page-content p-5" id="content">
        <div class="container">
          <ol class="breadcrumb default-color">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Kategori Post</li>
          </ol>
      		<div class="row">
		         <div class="col-md-12">
		         		<div class="mb-5">
                  <?php 
                        if(isset($_GET['pesan'])){
                          if($_GET['pesan']=="gagal-ubah"){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Gagal!</strong> Mengedit.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                  ';
                          }

                          if($_GET['pesan']=="password-tidak-sama"){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Maaf!</strong> Confirmasi password tidak sama.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                  ';
                          }

                          if($_GET['pesan']=="password-5"){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Maaf!</strong> Password harus 5 karakter.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                  ';
                          }

                          if($_GET['pesan']=="password-salah"){
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Maaf!</strong> Password salah. 
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                                  ';
                          }


                        }
                    ?>

			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-gear"></i> Setting</h5>
                        <?php
                          $username = $_SESSION['admin'];
                          $qTampil = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username'");
                          foreach($qTampil as $row){
                        ?>
                          <form method="post" action="aksi-edit-admin.php">
                            <div class="row align-items-center">
                              <div class="col-lg-12">
                                  <input type="hidden" name="id_admin" class="form-control rounded" placeholder="" required value="<?php echo $row['id_admin']; ?>">
                              </div>

                              <div class="col-lg-12">
                                  <label>Username :</label>
                                  <input type="text" name="username" class="form-control rounded" placeholder="Masukkan Username" required value="<?php echo $row['username']; ?>">
                              </div>

                              <div class="col-lg-12">
                                  <label>Password Lama</label>
                                  <input type="password" name="password_lama" class="form-control rounded" placeholder="Masukkan Password Lama" required >
                                  
                              </div>

                              <div class="col-lg-12">
                                  <label>Password Baru</label>
                                  <input type="password" name="password_baru" class="form-control rounded" placeholder="Masukkan Password Baru" required >
                                  
                              </div>

                              <div class="col-lg-12">
                                  <label>Ulangi Password</label>
                                  <input type="password" name="konfirmasi_password" class="form-control rounded" placeholder="Masukkan Confrimasi Password " required >
                                  
                              </div>


                              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
                                <br>
                                <input type="submit" name="submit" class="btn btn-success btn-block rounded" value="Simpan">
                              </div>
                              <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
                                <br>
                                <input type="reset" class="btn btn-warning btn-block rounded" value="Reset">
                              </div>
                              
                            </div>
                          </form>
                        <?php
                          }
                        ?>
			                </div>
			              </div>
		            	</div>
		         </div>				
			   </div>
		  </div>
	 </div>

<?php 
	include 'public_part/footer.php';
?>