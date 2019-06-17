<?php
	include ('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tambah Angota</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="../assets/css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	</head>
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
								<div class="btn-group">
									<button type="button" class="btn btn-danger fa fa-users dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DATA PENDAFTAR</button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="#">Data Pendaftar</a>
										<a class="dropdown-item" href="#">Edit Data Pendaftar</a>
										<a class="dropdown-item" href="#">Deleter Data Pendaftar</a>
									</div>
								</div>
							</ul>
							<ul class="list-group">
								<li class="list btn-outline-secondary text-center" type="button" ><i class="fa fa-home"></i>
									DASHBOARD
								</li><br>
								<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
									<a class="dropdown-item" href="#">Data Anggota</a>
									<a class="dropdown-item" href="#">Edit Data Anggota</a>
									<a class="dropdown-item" href="#">Delete Data Anggota</a>
								</div><br>
								<li class="list btn btn-danger text-center" type="button"><i class="fa fa-users"></i>USER
								</li>
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

							<form method="post" action="simpan-anggota.php">

								<div class="form-group">
									<label for="exampleInputEmail1">Nama</label>
									<input type="text" name="fnama" class="form-control" placeholder="Nama">
								</div>
								                
								<div class="form-group">
									<label for="exampleInputPassword1">No. KTP</label>
									<input type="text" name="fno_ktp" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="No. Telepon">
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
									<label for="exampleFormControlSelect1">Jenis Kelamin</label>
									<!--
									<input type="text" name="fjenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
									-->

									<select name="fjenis_kelamin" class="form-control" id="exampleFormControlSelect1">
										<option>Laki-laki</option>
										<option>Perempuan</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Tempat Lahir</label>
									<input type="text" name="ftempat_lahir" class="form-control" placeholder="Tempat Lahir">
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Tanggal Lahir</label>
									<input type="text" name="ftgl_lahir" class="form-control" placeholder="01/01/1980">
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="text" name="fdusun_desa" class="form-control" placeholder="Dusun/Desa">
									<br>
									<select name="fkecamatan" class="form-control" id="exampleFormControlSelect1">
										<?php
										  	$qTampilKecamatan = "SELECT * FROM kecamatan";
										  	$tampilKecamatan = mysqli_query($connect, $qTampilKecamatan);
											while($row = mysqli_fetch_assoc($tampilKecamatan) ){
										?>

    									<option value="<?php echo $row['kecamatan']; ?>"><?php echo $row['kecamatan']; ?></option>

   										<?php 
   											} 
   										?>
									</select>
									<br>
									<input type="text" name="fkota" class="form-control" value="Kab. Jombang" readonly>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Nomor Telepon</label>
									<input type="text" name="fno_telepon" maxlength="13" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="No. Telepon">
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
									<label for="exampleFormControlSelect1">Jenjang</label>
									<select name="fjenjang" class="form-control" id="exampleFormControlSelect1">
										<option>S1</option>
										<option>S2</option>
										<option>S3</option>
									</select>
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Jurusan</label>
									<input type="text" name="fjurusan" class="form-control" placeholder="Jurusan">
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">PT / Universitas</label>
									<input type="text" name="fpt_univ" class="form-control" placeholder="Asal PT/Universitas">
								</div>

								<!--
								<div class="form-group">
									<label for="exampleInputPassword1">Recaptcha</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="form-group">
									<label for="exampleInputPassword1">Recaptcha</label>
									<input type="text" class="form-control" placeholder="">
								</div>

								<div class="form-group">
									<label for="exampleFormControlFile1">File - EDITABLE</label>
									<input type="file" class="form-control-file" id="exampleFormControlFile1">
									(max. 1MB)
								</div>
								-->

								<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>TAMBAHKAN</button>
								<button type="reset" class="btn btn-warning"><i class="fas fa-undo"></i>RESET</button>

							</form>
						</div>
					</div>
				</div>
				<!-- akhir form -->
			</div>
		</div>
	</body>
</html>