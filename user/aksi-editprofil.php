<?php
include ('../config/koneksi.php');

	$id 			= $_POST['id'];
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
					nama = '$nama',
					no_ktp = '$no_ktp',
					jenis_kelamin = '$jenis_kelamin',
					tempat_lahir = '$tempat_lahir',
					tgl_lahir = '$tgl_lahir',
					dusun_desa = '$dusun_desa',
					kecamatan = '$kecamatan',
					kota = '$kota',
					no_telepon = '$no_telepon',
					jenjang	= '$jenjang',
					jurusan = '$jurusan',
					pt_univ = '$pt_univ',
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
















/*
	include ('../config/koneksi.php');

	$id 			= $_POST['id'];
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


	$qEdit 	= "UPDATE anggota SET nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ' NULL WHERE id_anggota='$id'";
	$edit 	= mysqli_query($connect, $qEdit);
		
	if($edit){
		header('location:profil.php');
	}else{
		echo "gagal";
	}
	*/
?>