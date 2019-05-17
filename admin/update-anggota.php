<?php
	include "../config/koneksi.php";

	$id 			= $_POST['id'];
	$nama 			= $_POST['nama'];
	$no_ktp 		= $_POST['no_ktp'];
	$jenis_kelamin 	= $_POST['jenis_kelamin'];
	$tempat_lahir 	= $_POST['tempat_lahir'];
	$tanggal_lahir 	= $_POST['tanggal_lahir'];
	$dusun_desa 	= $_POST['dusun_desa'];
	$kecamatan 		= $_POST['kecamatan'];
	$kota 			= $_POST['kota'];
	$nomor_telepon 	= $_POST['nomor_telepon'];
	$jenjang 		= $_POST['jenjang'];
	$jurusan 		= $_POST['jurusan'];
	$pt_univ 		= $_POST['pt_univ'];

	$query = "UPDATE data_sarjana SET nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', nomor_telepon='$nomor_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ' WHERE id_sarjana='$id'";
	$sql = mysqli_query($connect, $query);
	if($connect->query($sql) == TRUE){
		header('location:data-sarjana.php');
	}else{
		echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal mengubah data'); window.location.href='edit-sarjana.php'</script>");
	}
?>