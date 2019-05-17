<?php
	include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Pendaftar</title>
	<!-- link bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- link style.css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
	<!-- navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <button type="button" class="btn btn-secondary" style="margin-right: 20px">Home</button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <button type="button" class="btn btn-secondary">Daftar Anggota</button>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" style="margin-right: 20px">Search</button>
      <hr>
      <button type="button" class="btn btn-secondary">Logout</button>
    </form>
  </div>
  </div>
</nav>
<!-- akhir navbar -->
<!-- sidebar -->
<div class="container-fluid" style="margin-top: 80px">
	<div class="row">

		<div class="col-md-3">
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title text-center"><i class="fa fa-list-ul"></i > MAIN MENU</h5>
			    <hr>
					<ul class="list-group"">
					  <li class="list btn-outline-secondary text-center" type="button" ><i class="fa fa-home"></i>
					  DASHBOARD
					  </li>
					  <br>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Data Pendaftar</a>
					    <a class="dropdown-item" href="#">Edit Data Pendaftar</a>
					    <a class="dropdown-item" href="#">Delete Data Pedaftar</a>
					  </div>
					  <br>
					  <li class="list btn-outline-secondary text-center" type="button"><i class="fa fa-users"></i> USER
					  </li>
					</ul>
			  </div>
			</div>
		</div>
<!-- akhir sidebar -->
<!-- form -->
		<div class="col-md-9">
			<div class="card">
			  <div class="card-body">
			    	<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> FORM DATA SARJANA NU JOMBANG</h5>
            <hr>

              <form>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">NAMA LENGKAP</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">NO. KTP</label>
                  <input type="text" class="form-control" placeholder="Masukkan No. KTP Anda">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="text" class="form-control" placeholder="Tanggal Lahir">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" placeholder="Dusun/Desa">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1"></label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Lain-lain</option>
                    <option>Jombang</option>
                    <option>Mojokerto</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1"></label>
                  <input type="text" class="form-control" placeholder="" disabled="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nomor Telepon</label>
                  <input type="text" class="form-control" placeholder="Masukkan No. Telepon">
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenjang</label>
                  <select class="form-control" id="exampleFormControlSelect1">
                    <option>Lain-lain</option>
                    <option>S1</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Jurusan</label>
                  <input type="text" class="form-control" placeholder="Masukkan Jurusan">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">PT / Universitas</label>
                  <input type="text" class="form-control" placeholder="Asal PT/Universitas">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Recaptcha</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Recaptcha</label>
                  <input type="text" class="form-control" placeholder="">
                </div>

                <form>
                  <div class="form-group">
                    <label for="exampleFormControlFile1">File - EDITABLE</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    (max. 1MB)
                  </div>
                </form>

                <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> DAFTAR</button>
                <button type="reset" class="btn btn-warning"><i class="fas fa-undo"></i> RESET</button>

              </form>
				</div>
			</div>
		</div>

<!-- akhir form -->

    <!-- akhir form -->
</body>
</html>