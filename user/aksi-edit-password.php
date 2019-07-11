<?php
	include ('../config/koneksi.php');

		//membuat variabel untuk menyimpan data inputan yang di isikan di form
		$username				= $_POST['username'];
		$password_lama			= $_POST['password_lama'];
		$password_baru			= $_POST['password_baru'];
		$konfirmasi_password	= $_POST['konfirmasi_password'];
		
		//cek dahulu ke database dengan query SELECT
		//kondisi adalah WHERE (dimana) kolom password adalah $password_lama di encrypt m5
		//encrypt -> md5($password_lama)
		$x	= md5($password_lama);
		$cek 			= $connect->query("SELECT * FROM anggota WHERE password='$x'");
		
		if($cek->num_rows){
			//kondisi ini jika password lama yang dimasukkan sama dengan yang ada di database
			//membuat kondisi minimal password adalah 5 karakter
			if(strlen($password_baru) >= 5){
				//jika password baru sudah 5 atau lebih, maka lanjut ke bawah
				//membuat kondisi jika password baru harus sama dengan konfirmasi password
				if($password_baru == $konfirmasi_password){
					//jika semua kondisi sudah benar, maka melakukan update kedatabase
					//query UPDATE SET password = encrypt md5 password_baru
					//kondisi WHERE id user = session id pada saat login, maka yang di ubah hanya user dengan id tersebut
					$password_baru 	= md5($password_baru);
					$id_anggota 	= $_POST['id_anggota']; //ini dari session saat login
					
					$update 		= $connect->query("UPDATE anggota SET username='$username', password='$password_baru' WHERE id_anggota='$id_anggota'");
					if($update){
						//kondisi jika proses query UPDATE berhasil
						echo "<script>alert('Password berhasil di ubah. Tolong login kembali');window.location='../logout.php'</script>";
					}else{
						//kondisi jika proses query gagal
						header('location:setting.php?pesan=gagal-ubah');
					}					
				}else{
					//kondisi jika password baru beda dengan konfirmasi password
					header('location:setting.php?pesan=password-tidak-sama');
				}
			}else{
				//kondisi jika password baru yang dimasukkan kurang dari 5 karakter
				header('location:setting.php?pesan=password-5');
			}
		}else{
			//kondisi jika password lama tidak cocok dengan data yang ada di database
			header('location:setting.php?pesan=password-salah');
		}
	
?>