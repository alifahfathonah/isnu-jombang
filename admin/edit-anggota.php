<?php
	include ('../config/koneksi.php');
	$id 	= $_GET['id'];
	$qCek	= mysqli_query($connect,"SELECT * FROM anggota WHERE id='$id'");
	while($row 	= mysqli_fetch_array($qCek)){
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
      	<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
						<input type="text" name="fnama" value="<?php echo $row['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>No. KTP</td>
					<td><input type="text" name="fno_ktp" value="<?php echo $row['no_ktp']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="fjenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="ftempat_lahir" value="<?php echo $row['tempat_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="ftgl_lahir" value="<?php echo $row['tgl_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>Dusun/Desa</td>
					<td><input type="text" name="fdusun_desa" value="<?php echo $row['dusun_desa']; ?>"></td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td><input type="text" name="fkecamatan" value="<?php echo $row['kecamatan']; ?>"></td>
				</tr>
				<tr>
					<td>Kota</td>
					<td><input type="text" name="fkota" value="<?php echo $row['kota']; ?>"></td>
				</tr>
				<tr>
					<td>Nomor Telepon</td>
					<td><input type="text" name="fno_telepon" value="<?php echo $row['no_telepon']; ?>"></td>
				</tr>
				<tr>
					<td>Jenjang</td>
					<td><input type="text" name="fjenjang" value="<?php echo $row['jenjang']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="fjurusan" value="<?php echo $row['jurusan']; ?>"></td>
				</tr>
				<tr>
					<td>PT/Universitas</td>
					<td><input type="text" name="fpt_univ" value="<?php echo $row['pt_univ']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
    </form>
<?php
	}
?>
</body>
</html>