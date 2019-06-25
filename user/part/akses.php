<?php
session_start();

if(empty($_SESSION['username'])){
    header("location:../login/index.php");
}else if(!isset($_SESSION['user'])){
	echo '<script language="javascript">document.location="../admin/index.php";</script>';
}
?>