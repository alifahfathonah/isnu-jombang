<?php
session_start();

if(empty($_SESSION['username'])){
    header("location:../login/index.php");
}else if(!isset($_SESSION['admin'])){
	echo '<script language="javascript">document.location="../user/index.php";</script>';
}
?>