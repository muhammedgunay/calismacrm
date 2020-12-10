<?php

include 'fonksiyon.php';

$gelenadi=$_GET["gadi"];
$gelentel=$_GET["gtel"];
$gelenadres=$_GET["gadres"];
$gelenvergi=$_GET["gvergi"];
$gelenacikla=$_GET["gacikla"];
$gelenid2=$_GET["gid"];
echo  $gelenadres." ". $gelenkurum." ". $gelentel." ". $gelenadi." ".$gelenid2;

/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt); */

$guncelle=mysqli_query(connect(), "update kurum set k_adi='$gelenadi',adresi='$gelenadres'
	,telefon='$gelentel',vergino='$gelenvergi' ,aciklama='$gelenacikla' where kid='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:kurum.php");
} 
?>