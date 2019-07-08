<?php 
	include ('../config/koneksi.php');
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
					header('location:post.php');
				}
			}else{
				echo "<script>alert('Peringtan! Gambar/foto harus diupload sekalian!');history.go(-1);</script>";
			}
?>