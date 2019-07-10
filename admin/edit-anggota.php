<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="page-content p-5" id="content">
      	<div class="container">
      		<ol class="breadcrumb default-color">
	          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	          <li class="breadcrumb-item"><a href="data_anggota.php">Data Anggota</a></li>
	          <li class="breadcrumb-item active">Edit Data Anggota</li>
	        </ol>
      		<div class="row">
		         <div class="col-md-12">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-edit"></i> EDIT ANGGOTA</h5>
								<hr><br>
								<?php
									$id_anggota = $_GET['id_anggota'];
									$qTampil = mysqli_query($connect, "SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
									foreach($qTampil as $row){
								?>
				                <form method="post" action="aksi-edit-anggota.php?id_anggota=<?php echo $row['id_anggota']; ?>">
					                <div class="row align-items-center">
					                	<div class="col-lg-12">
						                    <input type="hidden" name="id_anggota" class="form-control rounded" placeholder="" required value="<?php echo $row['id_anggota']; ?>">
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
					                  		
						                    
						                </div>

					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="submit" name="submit_anggota" class="btn btn-success btn-block rounded" value="Simpan">
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