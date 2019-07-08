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
									$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
									foreach($qTampil as $row){
								?>
				                <form method="post" action="aksi-editprofil.php?id_anggota=<?php echo $row['id_anggota']; ?>" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	<div class="col-lg-12">
						                    <input type="hidden" name="id" class="form-control rounded" placeholder="" required value="<?php echo $row['id_anggota']; ?>">
						                </div>

					                  	<div class="col-lg-12">
					                  		<label>Nama :</label>
						                    <input type="text" name="nama" class="form-control rounded" placeholder="Masukkan Nama" required value="<?php echo $row['nama']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. KTP :</label>
						                    <input type="text" name="no_ktp" class="form-control rounded" placeholder="Masukkan No. KTP" required value="<?php echo $row['no_ktp']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenis Kelamin :</label>
						                    <input type="text" name="jenis_kelamin" class="form-control rounded" placeholder="Masukkan Jenis Kelamin" required value="<?php echo $row['jenis_kelamin']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tempat Lahir :</label>
						                    <input type="text" name="tempat_lahir" class="form-control rounded" placeholder="Masukkan Tempat Lahir" required value="<?php echo $row['tempat_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tgl. Lahir :</label>
						                    <input type="date" name="tgl_lahir" class="form-control rounded" placeholder="Masukkan Tgl. Lahir" required value="<?php echo $row['tgl_lahir']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Dusun / Desa :</label>
						                    <input type="text" name="dusun_desa" class="form-control rounded" placeholder="Masukkan Dusun / Desa" required value="<?php echo $row['dusun_desa']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kecamatan :</label>
						                    <input type="text" name="kecamatan" class="form-control rounded" placeholder="Masukkan Kecamatan" required value="<?php echo $row['kecamatan']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kota :</label>
						                    <input type="text" name="kota" class="form-control rounded" placeholder="Masukkan Kota" required value="<?php echo $row['kota']; ?>">
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
						                    <input type="text" name="pt_univ" class="form-control rounded" placeholder="Masukkan PT / Universitas" required value="<?php echo $row['pt_univ']; ?>">
						                </div>

						                <div class="col-lg-12">
					                  		<label>Foto :</label>
					                  		<br>
					                  		<small style="color: red;">*/ Mohon untuk upload foto juga!</small>
						                    <input type="file" name="foto" id="foto" class="form-control rounded" placeholder="Masukkan Foto">

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
			</div>
			<br>
			<div class="row">
				
			</div>
		</div>
	</div>
<?php 
	include 'public_part/footer.php';
?>