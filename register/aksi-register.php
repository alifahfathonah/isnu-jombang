<?php 

    include '../config/koneksi.php';

    $username   = mysqli_real_escape_string($connect, $_POST["username"]);  
    $password   = mysqli_real_escape_string($connect, $_POST["password"]);  
    $password   = md5($password);  
    $level      = "user";

    $cek_user=mysqli_num_rows(mysqli_query($connect, "SELECT * FROM users WHERE username='$_POST[username]'"));
    if ($cek_user > 0) {
        echo '<script language="javascript">alert ("Username sudah digunakan!"); window.location="../register/index.php";</script>';
        exit();
    } else {
        $query = "INSERT INTO users (username, password, level) VALUES('$username', '$password', '$level')";  
        if(mysqli_query($connect, $query)){
            header("location:../login/index.php?pesan=sukses");
        }
    }
?>