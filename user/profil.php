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
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title text-left"><i class="icon-address-card"></i> PROFIL ANGGOTA</h5>
								<hr><br>
				                <table class="table table-striped">
										<thead>
											<?php
			                    				include ('../config/koneksi.php');
											  	$username = $_SESSION['username'];
											  	$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
											  	foreach($qTampil as $row){
											?>
											<tr>
												<th><strong>Nama : </strong></th>
												<th><?php echo $row['nama']; ?></th>
											</tr>
											<tr>
												<th><strong>No. KTP : </strong></th>
												<th><?php echo $row['no_ktp']; ?></th>
											</tr>
											<tr>
												<th><strong>Jenis Kelamin : </strong></th>
												<th><?php echo $row['jenis_kelamin']; ?></th>
											</tr>
											<tr>
												<th><strong>Tempat Lahir : </strong></th>
												<th><?php echo $row['tempat_lahir']; ?></th>
											</tr>
											<tr>
												<th><strong>Tanggal Lahir : </strong></th>
												<th><?php echo $row['tgl_lahir']; ?></th>
											</tr>
											<tr>
												<th><strong>Desa / Dusun : </strong></th>
												<th><?php echo $row['dusun_desa']; ?></th>
											</tr>
											<tr>
												<th><strong>Kecamatan : </strong></th>
												<th><?php echo $row['kecamatan']; ?></th>
											</tr>
											<tr>
												<th><strong>Kota : </strong></th>
												<th><?php echo $row['kota']; ?></th>
											</tr>
											<tr>
												<th><strong>No. Telpon : </strong></th>
												<th><?php echo $row['no_telepon']; ?></th>
											</tr>
											<tr>
												<th><strong>Jenjang : </strong></th>
												<th><?php echo $row['jenjang']; ?></th>
											</tr>
											<tr>
												<th><strong>Jurusan : </strong></th>
												<th><?php echo $row['jurusan']; ?></th>
											</tr>
											<tr>
												<th><strong>PT / Universitas : </strong></th>
												<th><?php echo $row['pt_univ']; ?></th>
											</tr>
										</thead>
								</table>
								
								<a class="btn btn-success btn-md" href='edit-profil.php?id=<?php echo $row['id_anggota']; ?>'><i class="fa fa-edit"></i> Edit Profil</a>
												
								<a class="btn btn-warning btn-md" target="_blank" onclick="window.open('kartu.php?id=<?php echo $row['id_anggota']; ?>','Cetak Kartu');"><i class="fa fa-print"></i> Cetak Kartu</a>
								<?php
									}
								?>
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