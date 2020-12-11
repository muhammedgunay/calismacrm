<?php
include 'fonksiyon.php';
$gelenid=$_GET["id"];
echo $gelenid;


$sil=mysqli_query(connect(), "delete from ulkeler where u_id= '$gelenid'");
if ($sil) {
	echo "başarılı";
	@header("location:ulke.php");
}
?>