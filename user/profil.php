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
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
		            <div class="mb-5">
		              <div class="d-block d-md-flex listing">
		                <div class="lh-content">
		                  <!-- sidebar -->

							<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> MAIN MENU</h5>
							<hr>
							
							<ul class="list-group">
								<li class="list btn btn-success text-center" button onclick="window.location.href='../index.php'" type="button" ><i class="fa fa-home"></i>
								HOME
								</li><br>
								<li class="list btn btn-success text-center" button onclick="window.location.href='profil.php'" type="button" ><i class="fas fa-address-card"></i>
								PROFIL
								</li><br>
								<li class="list btn btn-success text-center" button onclick="window.location.href='../anggota.php'" type="button" ><i class="fa fa-user"></i>
								ANGGOTA
								</li><br>
								<li class="list btn btn-success text-center" button onclick="window.location.href='../logout.php'" type="button" ><i class="fa fa-sign-out-alt"></i>
								LOGOUT
								</li><br>
							</ul>
		                </div>
		              </div>
		            </div>
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
										echo $row['kota']; ?></div>
									<hr>
				                </div>
				                <?php
				                	}
				                	?>
				            </div>

			            </div>   
		            </div>
		         </div>
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title text-center"><i class="fa fa-list-ul"></i> PROFIL ANGGOTA</h5>
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

											<tr>
												<th>
												<a class="btn btn-success btn-md" href='edit-profil.php?id=<?php echo $row['id_anggota']; ?>'><i class="fa fa-edit"></i> Edit Profil</a>
												
												<a class="btn btn-warning btn-md" target="_blank" onclick="window.open('kartu.php?id=<?php echo $row['id_anggota']; ?>','Cetak Kartu Ujian');"><i class="fa fa-print"></i> Cetak Kartu</a>
												</th>
											</tr>
											<?php
											}
											?>
										</thead>
								</table>
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