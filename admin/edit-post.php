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
				                <h5 class="card-title"><i class="fa fa-edit"></i> EDIT POST</h5>
								<hr><br>
								
								<?php
									$id_post = $_GET['id_post'];
									$qTampil = mysqli_query($connect, "SELECT * FROM info WHERE id_info='$id_post'");
									foreach($qTampil as $row){
								?>
				                <form method="post" action="aksi-edit-post.php" enctype="multipart/form-data">
					                <div class="row align-items-center">
					                	<input type="hidden" name="id_post" class="form-control rounded" value="<?php echo $row['id_info']; ?>">

					                	<div class="col-lg-6">
					                  		<label>Judul :</label>
						                    <input type="text" name="judul" class="form-control rounded" placeholder="Masukkan Judul" required value="<?php echo $row['judul']; ?>">
						                </div>

						                <div class="col-lg-6">
					                  		<label>Tanggal :</label>
						                    <input type="date" name="tanggal" class="form-control rounded" placeholder="Masukkan Tanggal" required value="<?php echo $row['tanggal']; ?>">
						                </div>

					                  	<div class="col-lg-6">
					                  		<label>Kategori :</label>
						                    <input type="text" name="kategori" class="form-control rounded" placeholder="Masukkan Kategori" required value="<?php echo $row['kategori']; ?>">
						                </div>

						                <div class="col-lg-6">
					                  		<label>Foto / Gambar :</label><br>
					                  		<small style="color: red;">*/ Mohon untuk upload foto juga!</small>
						                    <input type="file" name="foto" class="form-control rounded" placeholder="Masukkan Foto / Gambar" value="<?php echo $row['img']; ?>" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Isi :</label>
						                    <textarea name="isi" class="ckeditor" placeholder="Masukkan Isi" required><?php echo $row['isi']; ?></textarea>
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
					            <?php
					            	}
					            ?>		                
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