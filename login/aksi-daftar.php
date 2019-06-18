<?php
    include ('../config/koneksi.php');

    $username   = mysqli_real_escape_string($connect, $_POST["username"]);  
    $password   = mysqli_real_escape_string($connect, $_POST["password"]);  
    $password   = md5($password);  
    $level      = "user";

    $qCekUser   = mysqli_query($connect, "SELECT * FROM users WHERE username='$_POST[username]'");
    $row        = mysqli_num_rows($qCekUser);
    if($row > 0){
        echo '<script language="javascript">alert ("Username sudah digunakan!"); window.location="daftar.php";</script>';
        exit();
    }else{
        $qDaftar = "INSERT INTO users (username, password, level) VALUES('$username', '$password', '$level')";  
        if(mysqli_query($connect, $qDaftar)){
            header("location:index.php?pesan=sukses");
        }
    }
?>