<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');

	$id = $_GET['id'];
	$qCek = mysqli_query($connect,"SELECT * FROM anggota WHERE id='$id'");
	while($row = mysqli_fetch_array($qCek)){
?>

<div class="container-fluid" style="margin-top: 80px">
	<div class="row">
		<?php
			include ('part/sidebar.php');
		?>
		<div class="col-md-9">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> FORM DATA SARJANA NU JOMBANG</h5>
					<hr>
					<!-- form -->
					<form method="post" action="update-anggota.php">
						<div class="form-group">
							<input type="hidden" name="id" class="form-control" value="<?php echo $row['id']; ?>">
						</div>

						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="fnama" class="form-control" value="<?php echo $row['nama']; ?>">
						</div>
			  
						<div class="form-group">
							<label>No. KTP</label>
							<input type="text" name="fno_ktp" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" value="<?php echo $row['no_ktp']; ?>">
							<script>
								function hanyaAngka(evt) {
								  	var charCode = (evt.which) ? evt.which : event.keyCode
								   	if (charCode > 31 && (charCode < 48 || charCode > 57))
							 
								    return false;
								  	return true;
								}
							</script>
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="fjenis_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']; ?>" required>
								<option value="">--Jenis Kelamin--</option>
							  	<option <?php if($row['jenis_kelamin'] == 'Laki-laki'){ echo 'selected'; } ?> value="Laki-laki">Laki-laki</option>
							  	<option <?php if($row['jenis_kelamin'] == 'Perempuan'){ echo 'selected'; } ?> value="Perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" name="ftempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir']; ?>">
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="text" name="ftgl_lahir" class="form-control" value="<?php echo $row['tgl_lahir']; ?>">
						</div>

						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="fdusun_desa" class="form-control" value="<?php echo $row['dusun_desa']; ?>">
							<br>

							<select name="fkecamatan" class="form-control" required>
								<option value="">--Pilih Kecamatan--</option>
								<?php
								  	$qTampilKecamatan = "SELECT * FROM kecamatan";
								  	$tampilKecamatan = mysqli_query($connect, $qTampilKecamatan);
									while($rows = mysqli_fetch_assoc($tampilKecamatan) ){
								?>
									
								<option value="<?php echo $rows['kecamatan']; ?>"><?php echo $rows['kecamatan']; ?></option>

								<?php 
									} 
								?>
							</select>
							<br>

							<input type="text" name="fkota" class="form-control" value="Kab. Jombang" readonly>
						</div>

						<div class="form-group">
							<label>Nomor Telepon</label>
							<input type="text" name="fno_telepon" maxlength="13" class="form-control" value="<?php echo $row['no_telepon']; ?>">
							<script>
								function hanyaAngka(evt) {
								  	var charCode = (evt.which) ? evt.which : event.keyCode
								   	if (charCode > 31 && (charCode < 48 || charCode > 57))
							 
								    return false;
								  	return true;
								}
							</script>
						</div>

						<div class="form-group">
							<label>Jenjang</label>
							<select type="text" name="fjenjang" class="form-control" value="<?php echo $row['jenjang']; ?>" required>
								<option value="">--Jenjang--</option>
								<option <?php if($row['jenjang'] == 'S1'){ echo 'selected'; } ?> value="S1">S1</option>
								<option <?php if($row['jenjang'] == 'S2'){ echo 'selected'; } ?> value="S2">S2</option>
								<option <?php if($row['jenjang'] == 'S3'){ echo 'selected'; } ?> value="S3">S3</option>
							</select>
						</div>

						<div class="form-group">
							<label>Jurusan</label>
							<input type="text" name="fjurusan" class="form-control" value="<?php echo $row['jurusan']; ?>">
						</div>

						<div class="form-group">
							<label>PT / Universitas</label>
							<input type="text" name="fpt_univ" class="form-control" value="<?php echo $row['pt_univ']; ?>">
						</div>

						<!--
						<div class="form-group">
							<label>File - EDITABLE</label>
							<input type="file" class="form-control-file">
							(max. 1MB)
						</div>
						-->
							
						<button type="submit" class="btn btn-success" id="button1"><i class="fa fa-save mr-sm-1"></i>SIMPAN</button>
						<button type="reset" class="btn btn-warning"><i class="fas fa-undo mr-sm-1"></i>RESET</button>
					</form>
					<!-- end form -->
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php
	include ('part/footer.php');
	}
?>