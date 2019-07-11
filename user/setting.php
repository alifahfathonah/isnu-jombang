<?php
	session_start();
	include '../config/koneksi.php';
	if(empty($_SESSION['username'])){
	    header("location:../login/login.php");
	}
	include 'public_part/header.php';
?>

<br>
    <div class="site-section bg-light">
      	<div class="container-fluid">
      		<div class="row">
      			 <div class="col-md-3">
		            <div class="mb-5">
		              <div class="d-block d-md-flex listing">
		                <div class="lh-content">
		                  <!-- sidebar -->

							<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> MAIN MENU</h5>
							<hr>
							
							<ul class="list-group">
								<li class="list btn btn-success text-left">
									<a href="../index.php" class="text-white">
										<i class="fa fa-home"></i>
										HOME
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="profil.php" class="text-white">
										<i class="icon-address-card"></i>
										PROFIL
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="setting.php" class="text-white">
										<i class="icon-gear"></i>
										SETTING
									</a>
								</li><br>
								<li class="list btn btn-success text-left">
									<a href="../logout.php" class="text-white">
										<i class="icon-sign-out"></i>
										LOGOUT
									</a>
								</li><br>
							</ul>
		                </div>
		              </div>
		            </div>
		         </div>
		         <div class="col-md-6">
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
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title text-left"><i class="icon-gear"></i> SETTING</h5>
				                <small>Halaman pengaturan akun</small>
								<hr><br>
								<?php
			                    	include ('../config/koneksi.php');
									$username = $_SESSION['username'];
									$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
									foreach($qTampil as $row){
								?>
				                <form method="post" action="aksi-edit-password.php">
					                <div class="row align-items-center">
					                	<div class="col-lg-12">
						                    <input type="hidden" name="id_anggota" class="form-control rounded" placeholder="" required value="<?php echo $row['id_anggota']; ?>">
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
						            <?php }?>
			                </div>
			              </div>
		            	</div>
		         </div>
		         <div class="col-md-3">
		            <div class="mb-5">
			            <div class="d-block d-md-flex listing vertical">
			            	
			            	<div class="card hovercard">
				                <div class="cardheader">

				                </div>
				                <?php
									$username = $_SESSION['username'];

									$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
										foreach($qTampil as $row){
											$img = $row['img'];
								?>
				                <div class="avatar">
				                	<?php
				                		if ($img > 0) {
				                			echo '<img src="img/'.$row['img'].'">';
				                		}else{
				                			echo '<img src="../images/avatar.png">';
				                		}
				                	?>
				                    
				                </div>
				                <div class="info">
				                    <div class="title">
				                        <h6><?php echo $row['nama']; ?></h6>
				                    </div>
				                    <div class="desc"><?php echo $row['dusun_desa'];
										echo ', ';
										echo $row['kecamatan'];
										echo ', ';
										echo $row['kota']; ?>
									</div><hr>
									<form method="post" action="aksi-edit-foto.php" enctype="multipart/form-data">
										<input type="hidden" name="id" class="form-control" required value="<?php echo $row['id_anggota']; ?>">

										<input type="file" name="foto" class="form-control" required>
										<br>
										<input type="submit" class="btn btn-success" name="" value="Edit Foto">
										<input type="reset" class="btn btn-warning" name="" value="Reset">
									</form>
									
				                </div>
				                <?php
				                	}
				                	?>
				            </div>

			            </div>   
		            </div>
		         </div>				
			</div>
			<br>
			<div class="row">
				
			</div>
		</div>
	</div>

<?php 
	include 'public_part/footer.php';
?>