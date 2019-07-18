<?php
	include '../config/koneksi.php';
    $captcha = $_POST['g-recaptcha-response'];
	$username= $_POST['username'];
	$password= md5($_POST['password']);
    $img = $_POST['img'];

    if (empty($captcha)) {
          echo "<script>alert('Maaf! Captcha belum disi.');window.location='daftar.php'</script>";
        } else {
          $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le3Pa4UAAAAAC4VEs1gL6F6aQ2TJtZhuXj9Ky0h&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
          if ($response.success != true) {
            echo 'You are spammer ! Get the @$%K out!!';
          } else {
            
          

            $qCekUser   = mysqli_query($connect, "SELECT * FROM anggota WHERE username='$username'");
            $row        = mysqli_num_rows($qCekUser);
            if ($row > 0) {
                echo '<script language="javascript">alert ("Username sudah digunakan!"); window.location="daftar.php";</script>';
                exit();
            }else{
                $qDaftar = "INSERT INTO anggota (username, password, img) VALUES('$username', '$password', '$img')";
                if(mysqli_query($connect, $qDaftar)){
                    header("location:login.php?pesan=sukses");
                }
            }
          }
    }

    	

?>