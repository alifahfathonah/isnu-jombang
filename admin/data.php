<?php
  session_start();
  include '../config/koneksi.php';
  if(empty($_SESSION['admin'])){
      header("location:login.php");
  }
?>

<h2>
	<center>
		Daftar Anggota<br>
		Ikatan Sarjana Nahdlotul Ulama Jombang<br>
		Tahun <?php echo date('Y');?> /
            <?php 
                  $thn_sekarang = date('Y');
                  $thn_kemarin = 1;

                  $thn_hasil = $thn_sekarang - $thn_kemarin;
                  echo $thn_hasil;
            ?>
	</center>
</h2>

<table class="table table-striped table-bordered" id="table_id">
	<thead>
		<tr>
			<th><strong>No</strong></th>
			<th><strong>No. KTP</strong></th>
			<th><strong>Nama</strong></th>
			<th><strong>Jenis Kelamin</strong></th>
			<th><strong>Tempat Lahir</strong></th>
			<th><strong>Tgl Lahir</strong></th>
			<th><strong>Alamat</strong></th>
			<th><strong>No. Telepon</strong></th>
			<th><strong>Jenjang</strong></th>
			<th><strong>Jurusan</strong></th>
			<th><strong>PT / Universitas</strong></th>
			
		</tr>
		</thead>
		<tbody>
			<?php
                include ('../config/koneksi.php');
				$no = 1;
				$qTampil = mysqli_query($connect, "
					SELECT A.*,B.*,C.*,D.* FROM anggota AS A 

					INNER JOIN desa AS B ON A.dusun_desa = B.id
					INNER JOIN kecamatan AS C ON A.kecamatan = C.id
					INNER JOIN universitas AS D ON A.pt_univ = D.id
				");
				foreach($qTampil as $row){
			?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['no_ktp']; ?></td>
				<td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['jenis_kelamin']; ?></td>
				<td><?php echo $row['tempat_lahir']; ?></td>
                <td><?php echo $row['tgl_lahir']; ?></td>
                <td><?php echo $row['desa']; ?>, <?php echo $row['kecamatan']; ?>, 		<?php echo $row['kota']; ?>
                </td>
				<td><?php echo $row['no_telepon']; ?></td>
                <td><?php echo $row['jenjang']; ?></td>
				<td><?php echo $row['jurusan']; ?></td>
                <td><?php echo $row['universitas']; ?></td>
			</tr>

			<?php
				}
			?>
		</tbody>
</table>