<?php 


ini_set('display_errors',1);

$host="localhost";
$user="root";
$passwd="";
$bd="pw3";

$link=mysqli_connect($host,$user,$passwd,$bd) or die( 'Error');

if(mysqli_connect_errno()){
	echo "Error code" .mysqli_connect_errno(). ", Msg " . mysqli_connect_error() ;
	exit();
}

mysqli_set_charset($link,"utf8");


?>
