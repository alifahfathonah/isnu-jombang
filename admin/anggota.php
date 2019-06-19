<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
?>

<br>
<br>
<br>
<br>
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

	<div class="card col-md-10 offset-md-1">
	  <div class="card-header">
	  	<i class="fa fa-list"></i>
	    Data Anggota
	  </div>
	  <div class="card-body">
	    <blockquote class="blockquote mb-0">
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
	<a href="tambah-anggota.php" type="button" class="btn-primary">Tambah Data Anggota</a>
	    </blockquote>
	  </div>
	</div>
	<div class="footer bg-secondary text-center mt-5" style="color: white">
		<div class="card-body">
		<h5>Copyright © 2019 Bisma Labs, All Rights Reserved.</h5>
  	</div>
</body>
</html>