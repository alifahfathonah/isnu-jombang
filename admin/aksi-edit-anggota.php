<?php
include ('../config/koneksi.php');
	
		$id_anggota		= $_POST['id_anggota'];
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


		$qEdit 	= "UPDATE anggota SET nama='$nama', no_ktp='$no_ktp', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', dusun_desa='$dusun_desa', kecamatan='$kecamatan', kota='$kota', no_telepon='$no_telepon', jenjang='$jenjang', jurusan='$jurusan', pt_univ='$pt_univ' WHERE id_anggota='$id_anggota'";
		$edit 	= mysqli_query($connect, $qEdit);
			
		if($edit){
			header('location:data_anggota.php');
		}else{
			echo "<script>alert('Gagal update data!');history.go(-1);</script>";
		}
	
	
?>