<?php
	include ('../config/koneksi.php');
	include ('part/header.php');
	include ('part/navbar.php');
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
						<form method="post" action="simpan-anggota.php">

							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="fnama" class="form-control" placeholder="Nama">
							</div>
							                
							<div class="form-group">
								<label>No. KTP</label>
								<input type="text" name="fno_ktp" maxlength="16" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="No. Telepon">
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
								<select name="fjenis_kelamin" class="form-control">
									<option>Laki-laki</option>
									<option>Perempuan</option>
								</select>
							</div>

							<div class="form-group">
								<label>Tempat Lahir</label>
								<input type="text" name="ftempat_lahir" class="form-control" placeholder="Tempat Lahir">
							</div>

							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="text" name="ftgl_lahir" class="form-control" placeholder="YYYY-MM-DD">
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="fdusun_desa" class="form-control" placeholder="Dusun/Desa">
								<br>
								<select name="fkecamatan" class="form-control">
									<?php
									  	$qTampilKecamatan = "SELECT * FROM kecamatan";
									  	$tampilKecamatan = mysqli_query($connect, $qTampilKecamatan);
										while($row = mysqli_fetch_assoc($tampilKecamatan) ){
									?>

   									<option value="<?php echo $row['kecamatan']; ?>"><?php echo $row['kecamatan']; ?></option>

									<?php 
										} 
									?>
								</select>
								<br>
								<input type="text" name="fkota" class="form-control" value="Kab. Jombang" readonly>
							</div>

							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" name="fno_telepon" maxlength="13" onkeypress="return hanyaAngka(event)" class="form-control" placeholder="No. Telepon">
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
								<select name="fjenjang" class="form-control">
									<option>S1</option>
									<option>S2</option>
									<option>S3</option>
								</select>
							</div>

							<div class="form-group">
								<label>Jurusan</label>
								<input type="text" name="fjurusan" class="form-control" placeholder="Jurusan">
							</div>

							<div class="form-group">
								<label>PT / Universitas</label>
								<input type="text" name="fpt_univ" class="form-control" placeholder="Asal PT/Universitas">
							</div>

							<!--
							<div class="form-group">
								<label>File - EDITABLE</label>
								<input type="file" class="form-control-file">
								(max. 1MB)
							</div>
							-->
							
							<button type="submit" class="btn btn-success" id="button1"><i class="fa fa-save"></i>TAMBAHKAN</button>
							<button type="reset" class="btn btn-warning"><i class="fas fa-undo"></i>RESET</button>
						</form>
						<!-- akhir form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php
	include ('part/footer.php');
?>