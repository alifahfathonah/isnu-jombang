<?php
	include ('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Anggota</title>
	<!-- link bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


<div class="container-fluid" style="margin-top: 80px">
	<div class="row">

		<div class="col-md-3">
			<div class="card">
			  <div class="card-body">
			    <h5 class="card-title"><i class="fa fa-list-ul"></i> MAIN MENU</h5>
					<ul class="list-group">
					  <li class="list-group-item"><i class="fa fa-home"></i> DASHBOARD</li>
					  <li class="list-group-item"><i class="fa fa-users"></i> DATA ANGGOTA</li>
					</ul>
			  </div>
			</div>
		</div>


		<div class="col-md-9">
			<div class="card">
			  <div class="card-body">
			    	<h5 class="card-title">FORM DATA SARJANA NU JOMBANG</h5>
			    	<hr>
				</div>
			</div>
		</div>

	</div>
</div>





<!-- 
			<div class="container">		
				<section class="sidebar">
				
				</section>
			</div>
    	
  		<div class="row">
    		
    		<div class="col-md-8 offset-md-4" >
    	<h2 style="text-align: center;">FORM DATA SARJANA NU JOMBANG</h2><hr><br>
	<form method="post" action="save-post.php" enctype="multipart/form-data">
      	<table cellpadding="3">
        	<tr>
	          	<td>Nama</td>
	          	<td>:</td>
	          	<td><input type="text" class="form-control" name="nama" placeholder="Nama"> </td>
        	</tr>
        	<tr>
	          	<td>No KTP</td>
	          	<td>:</td>
	          	<td><input type="text" name="no_ktp" placeholder="No KTP" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenis Kelamin</td>
	          	<td>:</td>
	          	<td><select name="jenis_kelamin" style="width:61%">
				  	<option value="laki_laki">Laki-laki</option>
				  	<option value="perempuan">Perempuan</option>
					</select>
				<td>
        	</tr>
        	<tr>
	          	<td>Tempat Lahir</td>
	          	<td>:</td>
	          	<td><input type="text" name="tempat_lahir" placeholder="Tempat Lahir" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Tanggal Lahir</td>
	          	<td>:</td>
	          	<td><input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Alamat</td>
	          	<td>:</td>
	          	<td><input type="text" name="dusun_desa" placeholder="Dusun/Desa" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td></td>
	          	<td></td>
	          	<td><select name="kecamatan" style="width:61%">
				  	<option value="jombang">Jombang</option>
				  	<option value="lain_lain">Lain-lain</option>
					</select>
				<td>
        	</tr>
        	<tr>
	          	<td></td>
	          	<td></td>
	          	<td><input type="text" name="Kabupaten" value="Jombang" style="width:60%" disabled></td>
        	</tr>
        	<tr>
	          	<td>Nomor Telepon</td>
	          	<td>:</td>
	          	<td><input type="text" name="nomor_telepon" placeholder="Nomor Telepon" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenjang</td>
	          	<td>:</td>
	          	<td><select name="jenjang" style="width:61%">
				  	<option value="s1">S1</option>
				  	<option value="lain_lain">Lain-lain</option>
					</select>
				<td>
        	</tr>
        	<tr>
	          	<td>Jurusan</td>
	          	<td>:</td>
	          	<td><input type="text" name="jurusan" placeholder="Jurusan" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>PT / Universitas</td>
	          	<td>:</td>
	          	<td><input type="text" name="pt_univ" placeholder="Asal PT / Universitas" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Recaptcha</td>
	          	<td>:</td>
	          	<td><input type="text" name="jawaban_recaptcha" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Recaptcha</td>
	          	<td>:</td>
	          	<td><input type="text" name="recaptcha" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td><b>File - EDITABLE</b></td>
	          	<td>:</td>
	          	<td><input type="file" name="photo" value="Telusuri..."><font size="2">(max. 1MB)</font></td>
        	</tr>
        	<tr>
          		<td colspan=3><input type="submit" value="Kirim"></td>
        	</tr>
      	</table>
    </form>
      		</div>
		</div>
    </div>
    </div> -->
    		

    <!-- akhir form -->
</body>
</html>