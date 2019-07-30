<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="page-content p-5" id="content">
      	<div class="container">
      		<ol class="breadcrumb default-color">
	          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	          <li class="breadcrumb-item"><a href="data_anggota.php">Data Anggota</a></li>
	          <li class="breadcrumb-item active">Tambah Data Anggota</li>
	        </ol>
      		<div class="row">
		         <div class="col-md-12">
		         		<div class="mb-5">
			              <div class="d-block d-md-flex listing">
			                <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-edit"></i> TAMBAH ANGGOTA</h5>
								<hr><br>
								
				                <form method="post">
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

						                <div class="col-lg-6">
					                  		<label>Jenis Kelamin :</label>
						                    <select class="browser-default custom-select" name="jenis_kelamin">
											  <option value="">-- Pilih Jenis Kelamin --</option>
											  
											  <option value="Laki-Laki">Laki-Laki</option>
											  <option value="Perempuan">Perempuan</option>
											</select>
						                </div>

						                <div class="col-lg-6">
					                  		<label>Tempat Lahir :</label>
						                    <input type="text" name="tempat_lahir" class="form-control rounded" placeholder="Masukkan Tempat Lahir" required >
						                </div>

						                <div class="col-lg-12">
					                  		<label>Tgl. Lahir :</label>
						                    <input type="date" name="tgl_lahir" class="form-control rounded" placeholder="Masukkan Tgl. Lahir" required>
						                </div>

						                <div class="col-lg-12">
						                	<br>
							                <b>ALAMAT ANGGOTA</b>

						                </div>
						                <div class="col-lg-4">
					                  		<label>Kota :</label>
						                    <select class="browser-default custom-select" name="kota">
											  <option selected>-- Pilih Kota --</option>
											  <option value="Jombang">
											  		Jombang
											  </option>
											</select>
						                </div>

						                <div class="col-lg-4">
					                  		<label>Kecamatan :</label>
						                    <select class="browser-default custom-select" name="kecamatan" id="kecamatan">
											  <option selected>-- Pilih Kecamatan --</option>
											  <?php 
								                  $qTampil = mysqli_query($connect, "SELECT * FROM kecamatan");
								                  foreach($qTampil as $row){
								                ?>
											  <option value="<?php echo $row["id"];?>">
											  		<?php echo $row["kecamatan"];?>
											  </option>

											<?php } ?>
											</select>
						                </div>

						                <div class="col-lg-4">
					                  		<label>Dusun / Desa :</label>
						                    <select class="browser-default custom-select" name="dusun_desa" id="dusun_desa">
											  <option value="">-- Pilih Desa --</option>
											  
											  <option></option>

											</select>
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
					                  		<label>Universitas :</label>
						                    <select class="browser-default custom-select" name="pt_univ" id="pt_univ">
											  <option selected>-- Pilih Universitas --</option>
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
					                    <input type="submit" name="submit_anggota" class="btn btn-success btn-block rounded" value="Simpan">
					                  </div>
					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="reset" class="btn btn-warning btn-block rounded" value="Reset">
					                  </div>
					                </div>
					            </form>			                
					        </div>
			              </div>
		            	</div>
		         </div>				
			</div>
		</div>
	</div>



	<script type="text/javascript">
		function berhasil() {
                    swal({
                        title: "BERHASIL",
                        text: "Data anggota Telah ditambahkan",
                        icon: "success",
                        buttons: [false, "OK"],
                      }).then(function() {
                        window.location.href="data_anggota.php";
                      });
                }
	</script>

<?php 
	include 'public_part/footer.php';

	if ($_POST["submit_anggota"]) {
		
		$username		= $_POST['username'];
		$password		= md5($_POST['password']);
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

		$query="INSERT INTO anggota SET username='$username', password='$password', nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ'";
		$cek=mysqli_query($connect, $query);
		if($cek){
			echo "<script>berhasil();</script>";
		}
	}
?>