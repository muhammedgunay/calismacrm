<?php

include 'fonksiyon.php';

$gelenadi=$_GET["gadi"];
$gelentel=$_GET["gtelefon"];
$gelenadres=$_GET["gadres"];
$gelenvergi=$_GET["gvergi"];
$gelenacikla=$_GET["gaciklama"];

$gelenilgili=$_GET["gilgili"];
$gelenreferans=$_GET["greferans"];
$gelenulke=$_GET["gulke"];
$gelensehir=$_GET["gsehir"];
$gelentipi=$_GET["gtipi"];

$gelenkurumresmi=$_GET["gkurumresmi"];
$gelenkurumkod=$_GET["gkurumkod"];
$gelenpostakodu=$_GET["gpostakodu"];
$geleneposta=$_GET["geposta"];

$gelenid2=$_GET["gid"];


/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt); */

$guncelle=mysqli_query(connect(), "update kurum set k_adi='$gelenadi',adresi='$gelenadres'
	,telefon='$gelentel',vergino='$gelenvergi' ,aciklama='$gelenacikla' ,ilgili='$gelenilgili' ,referansmusteri='$gelenreferans'
	,sehir_id='$gelensehir',musteritipi='$gelentipi',resmiadi='$gelenkurumresmi',firmakodu='$gelenkurumkod',ulke_id='$gelenulke'
	,postakodu='$gelenpostakodu',eposta='$geleneposta' where kid='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:kurum.php");
} else {
	echo "başarısız güncelleme";
}
?>