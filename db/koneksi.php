<?php 
$host 		= "localhost";
$username 	= "root";
$password 	= "maulayyacyber17";
$db_name 	= "isnu_db";

$connect = mysqli_connect($host,$username,$password,$db_name);

if (mysqli_connect_errno()){
	echo "Error Connection!" . mysqli_connect_error();
} else {
	echo "Connection OK";
}
?>