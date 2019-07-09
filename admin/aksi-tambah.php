<?php
	include ('../config/koneksi.php');
	
	if ($_POST["submit_post"]) {
			
		$judul 			= $_POST['judul'];
		$tanggal 		= $_POST['tanggal'];
		$kategori	 	= $_POST['kategori'];
		$isi		 	= $_POST['isi'];

		$fileName = $_FILES['gambar']['name'];
	  	$query="INSERT INTO info SET judul='$judul', tanggal='$tanggal', isi='$isi', kategori='$kategori', img='$fileName'";
	  	$cek=mysqli_query($connect, $query);

		// Simpan di Folder Gambar
		move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
		header('location:post.php?pesan=sukses');
	}

	if ($_POST["submit_anggota"]) {
		
		$username		= $_POST['username'];
		$password		= md5($_POST['password']);
		$nama 			= $_POST['nama'];
		$no_ktp 		= $_POST['no_ktp'];
		$jenis_kelamin 	= $_POST['jenis_kelamin'];
		$tempat_lahir 	= $_POST['tempat_lahir'];
		$tgl_lahir 		= $_POST['tgl_lahir'];
		$dusun_desa 	= $_POST['dusun_desa'];
		$kecamatan 		= $_POST['kecamatan'];
		$kota 			= $_POST['kota'];
		$no_telepon 	= $_POST['no_telepon'];
		$jenjang 		= $_POST['jenjang'];
		$jurusan 		= $_POST['jurusan'];
		$pt_univ 		= $_POST['pt_univ'];

		$query="INSERT INTO anggota SET username='$username', password='$password', nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ'";
		$cek=mysqli_query($connect, $query);
		if($cek){
			header('location:data_anggota.php?pesan=sukses');
		}else{
			echo "gagal";
		}
	}

	if ($_POST["submit_kategori"]) {
			
		$nama_kategori	= $_POST['nama_kategori'];

	  	$query="INSERT INTO kategori_info SET nama_kategori='$nama_kategori'";
	  	$cek=mysqli_query($connect, $query);

		header('location:kategori_post.php?pesan=sukses');
	}

?>