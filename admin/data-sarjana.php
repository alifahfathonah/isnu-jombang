<?php
	include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Sarjana</title>
		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
		<h2>Data Sarjana</h2><hr>
			<table>
				<tr>
					<th width='300'><strong>No</strong></th>
					<th width='700'><strong>Nama</strong></th>
					<th width='700'><strong>Kecamatan</strong></th>
					<th width='700'><strong>Jurusan</strong></th>
					<th colspan='2' width='150'><center><strong>Aksi</strong></center></th>
				</tr>
				<?php
				  	$query = mysqli_query($connect, "SELECT * FROM data_sarjana");
				  	foreach($query as $row){
				?>
				<tr>
					<td><?php echo $row['id_sarjana']; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['kecamatan']; ?></td>
					<td><?php echo $row['jurusan']; ?></td>
					<td align='right'><a href='edit-sarjana.php?id=<?php echo $row['id_sarjana']; ?>'>Edit</a></td>
					<td align='left'><a href='hapus-sarjana.php?id=<?php echo $row['id_sarjana']; ?>'>Hapus</a></td>
				</tr>
				<?php
					}
				?>
			</table><br>
		<a href="tambah-sarjana.php">Tambah Data Sarjana</a>
	</body>
</html>