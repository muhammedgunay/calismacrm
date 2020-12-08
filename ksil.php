<?php

$gelenid=$_GET["id"];
echo $gelenid;

$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt);


$sil=mysqli_query($baglan, "delete from kullanici where id= '$gelenid'");
if ($sil) {
	echo "başarılı";
	@header("location:kullanici.php");
}
?>