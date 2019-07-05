<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="site-section bg-light">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
		            <div class="mb-5">
		              <?php include 'public_part/menu_sidebar.php';?>
		            </div>
		         </div>
		         <div class="col-md-9">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-edit"></i> TAMBAH ANGGOTA</h5>
								<hr><br>
								
				                <form method="post" action="aksi-tambah-anggota.php" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	

					                	<div class="col-lg-12">
					                  		<label>Username :</label>
						                    <input type="text" name="username" class="form-control rounded" placeholder="Masukkan Username" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Password :</label>
						                    <input type="password" name="password" class="form-control rounded" placeholder="Masukkan Password" required>
						                </div>

					                  	<div class="col-lg-12">
					                  		<label>Nama :</label>
						                    <input type="text" name="nama" class="form-control rounded" placeholder="Masukkan Nama" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. KTP :</label>
						                    <input type="text" name="no_ktp" class="form-control rounded" placeholder="Masukkan No. KTP" required >
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenis Kelamin :</label>
						                    <input type="text" name="jenis_kelamin" class="form-control rounded" placeholder="Masukkan Jenis Kelamin" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tempat Lahir :</label>
						                    <input type="text" name="tempat_lahir" class="form-control rounded" placeholder="Masukkan Tempat Lahir" required >
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tgl. Lahir :</label>
						                    <input type="date" name="tgl_lahir" class="form-control rounded" placeholder="Masukkan Tgl. Lahir" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Dusun / Desa :</label>
						                    <input type="text" name="dusun_desa" class="form-control rounded" placeholder="Masukkan Dusun / Desa" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kecamatan :</label>
						                    <input type="text" name="kecamatan" class="form-control rounded" placeholder="Masukkan Kecamatan" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Kota :</label>
						                    <input type="text" name="kota" class="form-control rounded" placeholder="Masukkan Kota" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>No. Telepon :</label>
						                    <input type="text" name="no_telepon" class="form-control rounded" placeholder="Masukkan No. Telepon" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jenjang :</label>
						                    <input type="text" name="jenjang" class="form-control rounded" placeholder="Masukkan Jenjang" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Jurusan :</label>
						                    <input type="text" name="jurusan" class="form-control rounded" placeholder="Masukkan Jurusan" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>PT / Universitas :</label>
						                    <input type="text" name="pt_univ" class="form-control rounded" placeholder="Masukkan PT / Universitas" required>
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
					            </form>			                </div>
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