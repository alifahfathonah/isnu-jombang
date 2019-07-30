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
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title text-center"><i class="fa fa-list-ul"></i> PROFIL ANGGOTA</h5>
								<hr><br>
								<?php
			                    	include ('../config/koneksi.php');
									$username = $_SESSION['username'];
									$qTampil = mysqli_query($connect, "

									SELECT A.*,B.*,C.*,D.* FROM anggota AS A 

									INNER JOIN desa AS B ON A.dusun_desa = B.id
									INNER JOIN kecamatan AS C ON A.kecamatan = C.id
									INNER JOIN universitas AS D ON A.pt_univ = D.id

									WHERE username='$username'");
									foreach($qTampil as $row){
								?>
				                <form method="post" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	<div class="col-lg-12">
						                    <input type="hidden" name="id_anggota" class="form-control rounded" placeholder="" required value="<?php echo $row['id_anggota']; ?>">
						                </div>
						                <div class="col-lg-12">
					                  		<label>Username :</label>
						                    <input type="text" name="username" class="form-control rounded" placeholder="Masukkan Username" required value="<?php echo $row['username']; ?>">
						                </div>
					                  	<div class="col-lg-12">
					                  		<label>Nama :</label>
						                    <input type="text" name="nama" class="form-control rounded" placeholder="Masukkan Nama" required value="<?php echo $row['nama']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. KTP :</label>
						                    <input type="text" name="no_ktp" class="form-control rounded" placeholder="Masukkan No. KTP" required value="<?php echo $row['no_ktp']; ?>">
						                </div>

						                <div class="col-lg-6">
					                  		<label>Jenis Kelamin :</label>
						                    <select class="browser-default custom-select" name="jenis_kelamin" required>
											  
											  <option value="<?php echo $row["jenis_kelamin"];?>"><?php echo $row["jenis_kelamin"];?></option>
											  <option value="Laki-Laki">Laki-Laki</option>
											  <option value="Perempuan">Perempuan</option>
											</select>
						                </div>

						                <div class="col-lg-6">
					                  		<label>Tempat Lahir :</label>
						                    <input type="text" name="tempat_lahir" class="form-control rounded" placeholder="Masukkan Tempat Lahir" required value="<?php echo $row['tempat_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tgl. Lahir :</label>
						                    <input type="date" name="tgl_lahir" class="form-control rounded" placeholder="Masukkan Tgl. Lahir" required value="<?php echo $row['tgl_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
						                	<br>
							                <b>ALAMAT ANGGOTA</b>

						                </div>
						                <div class="col-lg-4">
					                  		<label>Kota :</label>
						                    <select class="browser-default custom-select" name="kota" required>
											  <option value="<?php echo $row['kota'];?>">
											  		<?php echo $row['kota'];?>
											  </option>
											  <option value="Jombang">
											  		Jombang
											  </option>
											</select>
						                </div>

						                <div class="col-lg-4">
					                  		<label>Kecamatan :</label>
						                    <select class="browser-default custom-select" name="kecamatan" id="kecamatan" required>
											  <option selected>-- Pilih Kecamatan --</option>
											  <?php 
								                  $qTampil = mysqli_query($connect, "SELECT * FROM kecamatan");
								                  foreach($qTampil as $kec){
								                ?>
											  <option value="<?php echo $kec["id"];?>">
											  		<?php echo $kec["kecamatan"];?>
											  </option>

											<?php } ?>
											</select>
						                </div>

						                <div class="col-lg-4">
					                  		<label>Dusun / Desa :</label>
						                    <select class="browser-default custom-select" name="dusun_desa" id="dusun_desa" required>
											  <option value="">-- Pilih Desa --</option>
											  
											  <option></option>

											</select>
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. Telepon :</label>
						                    <input type="text" name="no_telepon" class="form-control rounded" placeholder="Masukkan No. Telepon" required value="<?php echo $row['no_telepon']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenjang :</label>
						                    <input type="text" name="jenjang" class="form-control rounded" placeholder="Masukkan Jenjang" required value="<?php echo $row['jenjang']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jurusan :</label>
						                    <input type="text" name="jurusan" class="form-control rounded" placeholder="Masukkan Jurusan" required value="<?php echo $row['jurusan']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>PT / Universitas :</label>
						                    <select class="browser-default custom-select" name="pt_univ" id="pt_univ" required>
											  <option value="<?php echo $row["id"];?>"><?php echo $row["universitas"];?></option>
											  <?php 
								                  $qTampil = mysqli_query($connect, "SELECT * FROM universitas");
								                  foreach($qTampil as $row){
								                ?>
								                
											  <option value="<?php echo $row["id"];?>">
											  		<?php echo $row["universitas"];?>
											  </option>

											<?php } ?>
											</select>
						                </div>

					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="submit" name="submit_edit" class="btn btn-success btn-block rounded" value="Simpan">
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
			</div>
			<br>
			<div class="row">
				
			</div>
		</div>
	</div>

		<script type="text/javascript">
			function berhasil() {
				swal({
	            	title: "BERHASIL",
	                text: "Profil Telah diubah",
	                icon: "success",
	                buttons: [false, "OK"],
	            }).then(function() {
	            	window.location.href="profil.php";
	            });
	        }
		</script>
<?php 
	include 'public_part/footer.php';
	if (isset($_POST['submit_edit'])) {	
		$id_anggota		= $_POST['id_anggota'];
		$username		= $_POST['username'];
		$nama 			= $_POST['nama'];
		$no_ktp 		= $_POST['no_ktp'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$tempat_lahir 	= $_POST['tempat_lahir'];
		$tgl_lahir 		= $_POST['tgl_lahir'];
		$dusun_desa 	= $_POST['dusun_desa'];
		$kecamatan 		= $_POST['kecamatan'];
		$kota 			= $_POST['kota'];
		$no_telepon 	= $_POST['no_telepon'];
		$jenjang 		= $_POST['jenjang'];
		$jurusan 		= $_POST['jurusan'];
		$pt_univ 		= $_POST['pt_univ'];


		$qEdit 	= "UPDATE anggota SET username='$username', nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ' WHERE id_anggota='$id_anggota'";
		$edit 	= mysqli_query($connect, $qEdit);
			
		if($edit){
			echo "
				<script>berhasil();</script>
			";
		}else{
			echo "<script>alert('Gagal update data!');history.go(-1);</script>";
		}
	}
?>