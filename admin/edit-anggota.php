<?php
	include ('../config/koneksi.php');
	include ('part/header.php');

	$id 	= $_GET['id'];
	$qCek	= mysqli_query($connect,"SELECT * FROM anggota WHERE id='$id'");
	while($row 	= mysqli_fetch_array($qCek)){
?>

<body>
	<!-- navbar -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<div class="card" style="width: 3rem;">
				<img src="../assets/gambar/header.png" class="card-img-top" alt="...">
			</div>
			<h4 class="text-white">Ikatan Sarjana Nahdlatul Ulama</h4>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right: 20px">Search</button>
				<hr>
				<button type="button" class="btn btn-secondary">Logout</button>
			</form>
		</div>
	</nav>
	<!-- end navbar -->
	<!-- sidebar -->
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center"><i class="fa fa-list-ul"></i>MAIN MENU</h5>
						<hr>

						<ul class="list-group">
							<li class="list btn btn-danger text-center" type="button" ><i class="fa fa-home"></i>
							DASHBOARD
							</li><br>
						</ul>
						<ul class="list-group">
							<li class="list btn btn-danger text-center" type="button" ><i class="fa fa-user"></i>
							ANGGOTA
							</li><br>
						</ul>
						<ul class="list-group">
							<li class="list btn btn-danger text-center" type="button" ><i class="fa fa-home"></i>
							LOGOUT
							</li><br>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar -->
			<!-- form -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> FORM DATA SARJANA NU JOMBANG</h5>
						<hr>

						<form method="post" action="update-anggota.php">

							<div class="form-group">
								<label>Nama</label>
								<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
								<input type="text" name="fnama" class="form-control" value="<?php echo $row['nama']; ?>">
							</div>
							                
							<div class="form-group">
								<label>No. KTP</label>
								<input type="text" name="fno_ktp" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $row['no_ktp']; ?>">

								<script>
									function hanyaAngka(evt) {
									  	var charCode = (evt.which) ? evt.which : event.keyCode
									   	if (charCode > 31 && (charCode < 48 || charCode > 57))
							 
									    return false;
									  	return true;
									}
								</script>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
								<input type="text" name="fjenis_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']; ?>">
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="ftempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" name="ftgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>">
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="fdusun_desa" class="form-control" value="<?php echo $row['dusun_desa']; ?>">
								<br>

								<input type="text" name="fkecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>">
								<br>
								<input type="text" name="fkota" class="form-control" value="Kab. Jombang" readonly>
							</div>

							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" name="fno_telepon" class="form-control" value="<?php echo $row['no_telepon']; ?>">
								<script>
									function hanyaAngka(evt) {
									  	var charCode = (evt.which) ? evt.which : event.keyCode
									   	if (charCode > 31 && (charCode < 48 || charCode > 57))
								 
									    return false;
									  	return true;
									}
								</script>
							</div>

							<div class="form-group">
								<label>Jenjang</label>

								<select type="text" name="fjenjang" class="form-control" value="<?php echo $row['jenjang']; ?>">
									<option>S1</option>
									<option>S2</option>
									<option>S3</option>
								</select>
							</div>

							<div class="form-group">
								<label>Jurusan</label>
								<input type="text" name="fjurusan" class="form-control" value="<?php echo $row['jurusan']; ?>">
							</div>

							<div class="form-group">
								<label>PT / Universitas</label>
								<input type="text" name="fpt_univ" class="form-control" value="<?php echo $row['pt_univ']; ?>">
							</div>

							<div class="g-recaptcha" data-sitekey="6LdLMKkUAAAAAHap-4beGm4OPyKP3f9nNqjbidV1"></div><br>

							<!--
							<div class="form-group">
								<label>File - EDITABLE</label>
								<input type="file" class="form-control-file">
								(max. 1MB)
							</div>
							-->
							
							<button type="submit" class="btn btn-success" id="button1"><i class="fa fa-save mr-sm-1"></i>SIMPAN</button>
							<button type="reset" class="btn btn-warning"><i class="fas fa-undo mr-sm-1"></i>RESET</button>

						</form>
					</div>
				</div>
			</div>
			<!-- akhir form -->
		</div>
	</div>
		<div class="footer bg-secondary text-center mt-5" style="color: white">
		  <div class="card-body">
		  <h5>Copyright © 2019 Bisma Labs, All Rights Reserved.</h5>
  		</div>
</body>
</html>
<?php
	}
?>
</body>
</html>