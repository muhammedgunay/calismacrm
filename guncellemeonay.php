<?php

$gelenid=$_GET["id"];
$gelenadi=$_GET["gadi"];
$gelensoyadi=$_GET["gsoyadi"];
$gelenid2=$_GET["gid"];
echo $gelenid." ". $gelenadi." ".$gelenid2;

$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt);

$sil=mysqli_query($baglan, "update kullanici set adi='$gelenadi',soyadi='$gelensoyadi' 
	where id='$gelenid2'");
if ($sil) {
	echo "başarılı";
	@header("location:kullanici.php");
} 
?>