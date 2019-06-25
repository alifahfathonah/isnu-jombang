<?php
	include ('part/akses.php');
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
	include ('part/img-header.php');
	include ('part/menu.php');
?>

<div class="container" style="margin-top: 30px">
	<div class="row">
		<div class="col-8">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Profil</h5>
					<p class="card-text"></p>
					<?php
						$username = $_SESSION['username'];

						$qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM users AS A RIGHT JOIN anggota AS B ON A.id_user = B.id_user WHERE A.username = '$username'");
						foreach($qTampil as $row){
					?>
						<label>Nama :</label>
						<?php echo $row['nama']; ?>
			  			<br>
						<label>No. KTP :</label>
						<?php echo $row['no_ktp']; ?>
						<br>
						<label>Jenis Kelamin :</label>
						<?php echo $row['jenis_kelamin']; ?>
						<br>
						<label>Tempat Lahir :</label>
						<?php echo $row['tempat_lahir']; ?>
						<br>
						<label>Tanggal Lahir :</label>
						<?php echo $row['tgl_lahir']; ?>
						<br>
						<label>Alamat :</label>
						<?php 
						echo $row['dusun_desa'];
						echo ', ';
						echo $row['kecamatan'];
						echo ', ';
						echo $row['kota']; 
						?>
						<br>
						<label>Nomor Telepon :</label>
						<?php echo $row['no_telepon']; ?>
						<br>
						<label>Jenjang :</label>
						<?php echo $row['jenjang']; ?>
						<br>
						<label>Jurusan :</label>
						<?php echo $row['jurusan']; ?>
						<br>
						<label>PT / Universitas :</label>
						<?php echo $row['pt_univ']; ?>
						<br><br>

					<a href='edit-profil.php?id=<?php echo $row['id']; ?>'>Edit Profil</a>
					<?php
						}
					?>
				</div>
			</div>
		</div>

		<?php
			include('part/sidecard.php');
		?>
	</div>
</div>
<!-- end content -->

<?php
	include('part/footer.php');
?>