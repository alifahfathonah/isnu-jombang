<?php
	include ('../config/koneksi.php');
	$id 	= $_GET['id'];
	$qCek	= mysqli_query($connect,"SELECT * FROM anggota WHERE id_anggota='$id'");
	$row 	= mysqli_fetch_array($qCek);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Anggota</title>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<h2>FORM EDIT DATA SARJANA NU JOMBANG</h2><hr><br>
	<form method="post" action="update-anggota.php">
      	<table cellpadding="3">
        	<tr>
	          	<td>Nama</td>
	          	<td>:</td>
	          	<td><input type="text" name="nama" placeholder="Nama" value="<?php echo $row['nama']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>No KTP</td>
	          	<td>:</td>
	          	<td><input type="text" name="no_ktp" placeholder="No KTP" value="<?php echo $row['no_ktp']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenis Kelamin</td>
	          	<td>:</td>
	          	<td><input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $row['jenis_kelamin']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Tempat Lahir</td>
	          	<td>:</td>
	          	<td><input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $row['tempat_lahir']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Tanggal Lahir</td>
	          	<td>:</td>
	          	<td><input type="text" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo $row['tanggal_lahir']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Alamat</td>
	          	<td>:</td>
	          	<td><input type="text" name="dusun_desa" placeholder="Dusun/Desa" value="<?php echo $row['dusun_desa']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td></td>
	          	<td></td>
	          	<td><input type="text" name="kecamatan" placeholder="Kecamatan" value="<?php echo $row['kecamatan']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td></td>
	          	<td></td>
	          	<td><input type="text" name="kota" placeholder="Kota" value="<?php echo $row['kota']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Nomor Telepon</td>
	          	<td>:</td>
	          	<td><input type="text" name="nomor_telepon" placeholder="Nomor Telepon" value="<?php echo $row['nomor_telepon']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jenjang</td>
	          	<td>:</td>
	          	<td><input type="text" name="jenjang" placeholder="Jenjang" value="<?php echo $row['jenjang']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>Jurusan</td>
	          	<td>:</td>
	          	<td><input type="text" name="jurusan" placeholder="Jurusan" value="<?php echo $row['jurusan']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
	          	<td>PT / Universitas</td>
	          	<td>:</td>
	          	<td><input type="text" name="pt_univ" placeholder="Asal PT / Universitas" value="<?php echo $row['pt_univ']; ?>" style="width:60%"></td>
        	</tr>
        	<tr>
          		<td colspan=3><input type="submit" value="Edit"></td>
        	</tr>
      	<table>
    </form>
</body>
</html>