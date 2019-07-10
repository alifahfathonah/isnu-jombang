<?php
	include '../config/koneksi.php';

	$id = $_POST['id'];
	// Ambil data foto yang dipilih dari form
  	$foto = $_FILES['foto']['name'];
  	$tmp = $_FILES['foto']['tmp_name'];
  	
  	$fotobaru = date('dmYHis').$foto;

  	// Set path folder tempat menyimpan fotonya
  	$path = "img/".$fotobaru;
 	 // Proses upload
  	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
	    // Query untuk mengecek yang dikirim
	    $query = "SELECT * FROM anggota WHERE id_anggota='".$id."'";
	    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	    $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	    // Cek apakah file foto sebelumnya ada di folder images
	    if(is_file("img/".$data['img'])) // Jika foto ada
	      unlink("img/".$data['img']); // Hapus file foto sebelumnya yang ada di folder images
	    
	    // Proses ubah data ke Database
	    $query = "UPDATE anggota SET
					img = '$fotobaru'
					WHERE id_anggota='$id'";
	    $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
	    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
	      // Jika Sukses, Lakukan :
	      header("location: profil.php"); // Redirect ke halaman index.php
	    }
  	}else{
    	// Jika gambar gagal diupload, Lakukan :
	    echo "<script>alert('Peringtan! Gambar/foto harus diupload sekalian!');history.go(-1);</script>";
  	}
?>