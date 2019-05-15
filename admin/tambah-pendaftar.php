<?php
	include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
		<title>Tambah Pendaftar</title>
</head>
<body>
	<h2>FORM DATA SARJANA NU JOMBANG</h2><hr><br>
	<form method="post" action="save-post.php" enctype="multipart/form-data">
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
      	<table>
    </form>
</body>
</html>