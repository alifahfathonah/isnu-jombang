<?php
	include ('../config/koneksi.php');
	include ('part/header.php');

	$id 		= $_GET['id'];
	$qCek		= mysqli_query($connect,"SELECT * FROM anggota WHERE id='$id'");
	while($row 	= mysqli_fetch_array($qCek)){
?>

<body>
	<?php
		include ('part/navbar.php');
	?>

	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<?php
				include ('part/sidebar.php');
			?>

			<!-- form -->
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title text-center"><i class="fa fa-list-ul"></i> FORM DATA SARJANA NU JOMBANG</h5>
						<hr>

						<form method="post" action="update-anggota.php">
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
								<input type="text" name="fjenis_kelamin" class="form-control" value="<?php echo $row['jenis_kelamin']; ?>">
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

								<input type="text" name="fkecamatan" class="form-control" value="<?php echo $row['kecamatan']; ?>">
								<br>

								<input type="text" name="fkota" class="form-control" value="Kab. Jombang" readonly>
							</div>

							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" name="fno_telepon" class="form-control" value="<?php echo $row['no_telepon']; ?>">
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
								<select type="text" name="fjenjang" class="form-control" value="<?php echo $row['jenjang']; ?>">
									<option>S1</option>
									<option>S2</option>
									<option>S3</option>
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

							<div class="g-recaptcha" data-sitekey="6LdLMKkUAAAAAHap-4beGm4OPyKP3f9nNqjbidV1"></div><br>

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
					</div>
				</div>
			</div>
			<!-- akhir form -->
		</div>
	</div>
</body>
	
<?php
	include ('part/footer.php');
	}
?>