<?php
	include ('part/akses.php');
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
?>
	
	<div class="card col-md-10 offset-md-1" style="margin-top: 100px;min-height:100vh;">
		<div class="card-header">
	  		<i class="fa fa-list"></i>
	    	Data Anggota
		</div>
<br>
	  	<div>
	    	<blockquote class="blockquote mb-0">
				<table class="table table-striped table-bordered" id="table_id">
					<thead>
						<tr>
							<th><strong>No</strong></th>
							<th><strong>Nama</strong></th>
							<th><strong>Kecamatan</strong></th>
							<th><strong>Jurusan</strong></th>
							<th><center><strong>Aksi</strong></center></th>
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
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['kecamatan']; ?></td>
							<td><?php echo $row['jurusan']; ?></td>
							<td>		
								<a class="btn btn-success btn-sm" href='edit-anggota.php?id=<?php echo $row['id']; ?>'><i class="fa fa-edit"></i> Edit</a> <a class="btn btn-danger btn-sm" href='hapus-anggota.php?id=<?php echo $row['id']; ?>'><i class="fa fa-trash"></i> Hapus</a>
							</td>
						</tr>

						<?php
							}
						?>
					</tbody>
				</table><br>
	    	</blockquote>
	  	</div>
	</div>
<?php
	include ('part/footer.php');
?>