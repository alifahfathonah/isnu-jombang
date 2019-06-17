<?php
	include ('../config/koneksi.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Anggota</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body>
		<h2>Data Anggota</h2><hr>
			<table>
				<tr>
					<th width='300'><strong>No</strong></th>
					<th width='700'><strong>Nama</strong></th>
					<th width='700'><strong>Kecamatan</strong></th>
					<th width='700'><strong>Jurusan</strong></th>
					<th colspan='2' width='150'><center><strong>Aksi</strong></center></th>
				</tr>
				<?php
					$no = 1;
				  	$qTampil = mysqli_query($connect, "SELECT * FROM anggota");
				  	foreach($qTampil as $row){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['kecamatan']; ?></td>
					<td><?php echo $row['jurusan']; ?></td>
					<td align='right'><a href='edit-anggota.php?id=<?php echo $row['id']; ?>'>Edit</a></td>
					<td align='left'><a href='hapus-anggota.php?id=<?php echo $row['id']; ?>'>Hapus</a></td>
				</tr>
				<?php
					}
				?>
			</table><br>
		<a href="tambah-anggota.php">Tambah Data Anggota</a>
	</body>
</html>