<h2>
	<center>
		Daftar Anggota<br>
		Ikatan Sarjana Nahdlotul Ulama Jombang<br>
		Tahun 2019/2020
	</center>
</h2>

<table class="table table-striped table-bordered" id="table_id">
	<thead>
		<tr>
			<th><strong>No</strong></th>
			<th><strong>Nama</strong></th>
            <th><strong>Jenjang</strong></th>
			<th><strong>Jurusan</strong></th>
            <th><strong>PT / Universitas</strong></th>
		</tr>
		</thead>
		<tbody>
			<?php
                include ('config/koneksi.php');
				$no = 1;
				$qTampil = mysqli_query($connect, "SELECT * FROM anggota");
				foreach($qTampil as $row){
			?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><a href="detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['nama']; ?></a></td>
                <td><?php echo $row['jenjang']; ?></td>
									<td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['pt_univ']; ?></td>
			</tr>

			<?php
				}
			?>
		</tbody>
</table>