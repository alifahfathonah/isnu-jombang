<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
?>
<!-- Menu -->
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3" style="margin-top: 10px">
			<a href="dashboard.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-home"></i>
						<hr>
						HOME
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="profil.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-users"></i>
						<hr>
						PROFIL
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="anggota.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-list-ul"></i>
						<hr>
						DAFTAR ANGGOTA
					</div>
				</div>
			</a>
		</div>

		<div class="col-md-3" style="margin-top: 10px">
			<a href="../login/index.php" style="color: #000;text-decoration: none">
				<div class="card">
					<div class="card-body" style="text-align: center;font-size: 20px;font-weight: bold;">
						<i class="fa fa-sign-in-alt"></i>
						<hr>
						LOGIN 
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
<!-- End Menu -->
<!-- content -->
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><i class="fa fa-list-ul"></i> DATA SARJANA NU JOMBANG</h5>
					<hr>
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
						</table>
			    	</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end content -->

<?php
	include ('part/footer.php');
?>