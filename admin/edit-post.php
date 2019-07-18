<?php
	
	include 'public_part/header.php';
?>

<br>
    <div class="page-content p-5" id="content">
      	<div class="container">
      		<ol class="breadcrumb default-color">
	          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
	          <li class="breadcrumb-item"><a href="post.php">Post</a></li>
	          <li class="breadcrumb-item active">Edit Post</li>
	        </ol>
      		<div class="row">
		        <div class="col-md-12">
		         	<div class="mb-5">
			            <div class="d-block d-md-flex listing">
			        	    <div class="lh-content">
				                <h5 class="card-title"><i class="fa fa-edit"></i> EDIT POST</h5>
								<hr><br>
								
								<?php
									$id_post = $_GET['id_post'];
									$qTampil = mysqli_query($connect, "SELECT A.*,B.* FROM info AS A INNER JOIN kategori_info AS B ON A.kategori = B.id_kategori WHERE id_info='$id_post'");
									foreach($qTampil as $row){
								?>
				                <form method="post" enctype="multipart/form-data">
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
						                    <select class="browser-default custom-select" name="kategori">
											  <option value="<?php echo $row["id_kategori"];?>"><?php echo $row["nama_kategori"];?></option>
											  <?php 
								                  $qTampil = mysqli_query($connect, "SELECT * FROM kategori_info");
								                  foreach($qTampil as $kat){
								                ?>
											  <option value="<?php echo $kat["id_kategori"];?>">
											  		<?php echo $kat["nama_kategori"];?>
											  </option>

											<?php } ?>
											</select>
						                </div>

						                <div class="col-lg-6">
					                  		<label>Foto / Gambar :</label><br>
					                  		<small style="color: red;">*/ Mohon untuk upload foto juga!</small>
						                    <input type="file" name="foto" class="form-control rounded" placeholder="Masukkan Foto / Gambar" value="<?php echo $row['img']; ?>" required>
						                </div>

						                <div class="col-lg-12">
					                  		<label>Isi :</label>
						                    <textarea class="ckeditor" name="isi"><?php echo $row['isi']; ?></textarea>
						                </div>

						               

					                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-2">
					                  	<br>
					                    <input type="submit" name="submit_edit" class="btn btn-success btn-block rounded" value="Simpan">
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
	
	<script type="text/javascript">
		function berhasil() {
                    swal({
                        title: "BERHASIL",
                        text: "Post telah diubah",
                        icon: "success",
                        buttons: [false, "OK"],
                      }).then(function() {
                        window.location.href="post.php";
                      });
                }
	</script>


<?php 
	include 'public_part/footer.php';

	if (isset($_POST['submit_edit'])) {
		# code...
	
		$id_post		= $_POST['id_post'];
		$judul 			= $_POST['judul'];
		$tanggal 		= $_POST['tanggal'];
		$kategori	 	= $_POST['kategori'];
		$isi		 	= $_POST['isi'];
		// Ambil data foto yang dipilih dari form
		  	$foto = $_FILES['foto']['name'];
		  	$tmp = $_FILES['foto']['tmp_name'];
		  	
		  	$fotobaru = date('dmYHis').$foto;

		  	// Set path folder tempat menyimpan fotonya
		  	$path = "img/".$fotobaru;
		 	 // Proses upload
		  	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
			    // Query untuk mengecek yang dikirim
			    $query = "SELECT * FROM info WHERE id_info='".$id_post."'";
			    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
			    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
			    // Cek apakah file foto sebelumnya ada di folder images
			    if(is_file("img/".$data['img'])) // Jika foto ada
			      unlink("img/".$data['img']); // Hapus file foto sebelumnya yang ada di folder images
			    $qEdit 	= "UPDATE info SET judul='$judul', tanggal='$tanggal', isi='$isi', kategori='$kategori', img='$fotobaru' WHERE id_info='$id_post'";
				$edit 	= mysqli_query($connect, $qEdit);
				if($edit){
					echo "
						<script>berhasil();</script>
					";
				}
			}else{
				echo "<script>alert('Peringtan! Gambar/foto harus diupload sekalian!');history.go(-1);</script>";
			}
		}
?>