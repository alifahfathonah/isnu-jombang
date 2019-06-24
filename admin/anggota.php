<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
?>
	
	<div class="card col-md-10 offset-md-1" style="padding-top: 100px">
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
	    	</blockquote>
	  	</div>
	</div>
<?php
	include ('part/footer.php');
?>