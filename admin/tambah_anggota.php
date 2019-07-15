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
			<br>
			<div class="row">
				
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