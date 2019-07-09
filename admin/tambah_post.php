<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="site-section bg-light">
      	<div class="container">
      		<div class="row">
      			<div class="col-md-3">
		            <div class="mb-5">
		              <?php include 'public_part/menu_sidebar.php';?>
		            </div>
		        </div>
		        <div class="col-md-9">
		         	<div class="mb-5">
			            <div class="d-block d-md-flex listing">
			        	    <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-edit"></i> TAMBAH POST</h5>
								<hr><br>
								
				                <form method="post" action="aksi-tambah.php" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	<input type="hidden" name="id" class="form-control rounded">

					                	<div class="col-lg-6">
					                  		<label>Judul :</label>
						                    <input type="text" name="judul" class="form-control rounded" placeholder="Masukkan Judul" required>
						                </div>

						                <div class="col-lg-6">
					                  		<label>Tanggal :</label>
						                    <input type="date" name="tanggal" class="form-control rounded" placeholder="Masukkan Tanggal" required value="<?php echo date("Y-d-m"); ?>">
						                </div>

					                  	<div class="col-lg-6">
					                  		<label>Kategori :</label>
						                    <select class="browser-default custom-select" name="kategori">
											  <option selected>-- Pilih Kategori --</option>
											  <?php 
								                  $qTampil = mysqli_query($connect, "SELECT * FROM kategori_info");
								                  foreach($qTampil as $row){
								                ?>
											  <option value="<?php echo $row["id_kategori"];?>">
											  		<?php echo $row["kategori"];?>
											  </option>

											<?php } ?>
											</select>
						                </div>

						                <div class="col-lg-6">
					                  		<label>Foto / Gambar :</label>
						                    <input type="file" name="gambar" class="form-control rounded" placeholder="Masukkan Foto / Gambar" required >
						                </div>

						                <div class="col-lg-12">
					                  		<label>Isi :</label>
						                    <textarea name="isi" class="ckeditor" placeholder="Masukkan Isi" required></textarea>
						                </div>

						               

					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="submit" name="submit_post" class="btn btn-success btn-block rounded" value="Simpan">
					                  </div>
					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="reset" class="btn btn-warning btn-block rounded" value="Reset">
					                  </div>
					                  
					                </div>
					            </form>			                
					        </div>
			            </div>
		           	</div>
		        </div>				
			</div>
		</div>
	</div>
<?php 
	include 'public_part/footer.php';
?>