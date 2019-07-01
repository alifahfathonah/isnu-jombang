<?php
	///include ('part/akses.php');
	include ('config/koneksi.php');
	include ('public_part/header.php');
	include ('public_part/navbar.php');
	include ('public_part/menu.php');
	//include ('part/img-header.php');
?>


<div class="container" style="margin-top: 20px; min-height:100vh">
	<div class="row">
		<div class="col-md-8">
			<h5 class="card-title"><i class="fa fa-list-ul"></i> DATA SARJANA NU JOMBANG</h5>
			<hr>
			<div class="card">
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<table class="table table-striped table-bordered" id="table_id">
							<thead>
								<tr>
									<th><strong>No</strong></th>
									<th><strong>Nama</strong></th>
									<th><strong>Kecamatan</strong></th>
									<th><strong>Jurusan</strong></th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
								  	$qTampil = mysqli_query($connect, "SELECT * FROM anggota");
								  	foreach($qTampil as $row){
								?>

								<tr>
									<td><?php echo $no++; ?></td>
									<td><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></a></td>
									<td><?php echo $row['kecamatan']; ?></td>
									<td><?php echo $row['jurusan']; ?></td>
								</tr>

								<?php
									}
								?>
							</tbody>
						</table><br>
			    	</blockquote>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					About ISNU
				</div>
				<div class="card-body" style="font-size: 20px;">
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<i class="fas fa-camera btn btn-primary"> Social Media</i>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	include ('public_part/footer.php');
?>