<?php
	include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
		<title>Tambah Data Sarjana</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
	<h2>FORM TAMBAH DATA SARJANA NU JOMBANG</h2><hr><br>
	<form method="post" action="simpan-sarjana.php">
      	<table cellpadding="3">
        	<tr>
	          	<td>Nama</td>
	          	<td>:</td>
	          	<td><input type="text" name="nama" placeholder="Nama" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>No KTP</td>
	          	<td>:</td>
	          	<td><input type="text" name="no_ktp" placeholder="No KTP" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenis Kelamin</td>
	          	<td>:</td>
	          	<td><input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" style="width:60%"></td>
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
	          	<td><input type="text" name="kecamatan" placeholder="Kecamatan" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td></td>
	          	<td></td>
	          	<td><input type="text" name="kota" placeholder="Kota" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Nomor Telepon</td>
	          	<td>:</td>
	          	<td><input type="text" name="nomor_telepon" placeholder="Nomor Telepon" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenjang</td>
	          	<td>:</td>
	          	<td><input type="text" name="jenjang" placeholder="Jenjang" style="width:60%"></td>
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
          		<td colspan=3><input type="submit" value="Tambah"></td>
        	</tr>
      	<table>
    </form>
</body>
</html>