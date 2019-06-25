<?php
	include ('part/akses.php');
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
	include ('part/img-header.php');
	include ('part/menu.php');
?>

<!-- content -->
<div class="container" style="margin-top: 40px">
	<div class="row" style="min-height: 100vh">
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