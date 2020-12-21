<?php
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}
include ('fonksiyon.php');
include "header.php";





$sec =mysqli_query(connect(),"select * from login");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["kullaniciadi"]; 
	$aladi=$al["sifre"];
	


}

?>
