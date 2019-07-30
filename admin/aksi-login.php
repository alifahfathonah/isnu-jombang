<?php
  session_start();
  include '../config/koneksi.php';
  if(empty($_SESSION['admin'])){
      header("location:login.php");
  }
?>

<?php
	include '../config/koneksi.php';

	session_start();
	$captcha = $_POST['g-recaptcha-response'];
	$username 	= $_POST['username'];
	$password 	= md5($_POST['password']);


	if (empty($captcha)) {
          header("location:login.php?pesan=captcha");
      } else {
          $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le3Pa4UAAAAAC4VEs1gL6F6aQ2TJtZhuXj9Ky0h&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
          if ($response.success != true) {
           echo 'You are spammer ! Get the @$%K out!!';
          } else {

			$qLogin 	= mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
			$row 		= mysqli_num_rows($qLogin);
			
			if($row > 0){
				$login = mysqli_fetch_assoc($qLogin);
					
					$_SESSION['admin'] = $username;
					$_SESSION['admin'] = "admin";

					header("location:index.php");
					
			}else{
				header("location:login.php?pesan=gagal");
			}
		}
	}
?>