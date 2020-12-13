<?php

include 'fonksiyon.php';

$gelenadi=$_GET["gadi"];
$gelensoyadi=$_GET["gsoyadi"];
$gelentel=$_GET["gtel"];
$gelenadres=$_GET["gadres"];
$gelenkurum=$_GET["gkurum"];
$gelenid2=$_GET["gid"];

echo $gelenkurum;

echo  $gelenadres." ". $gelenkurum." ". $gelentel." ". $gelenadi." ".$gelenid2;



$guncelle=mysqli_query(connect(), "update kullanici set adi='$gelenadi',soyadi='$gelensoyadi'
	,ktelefon='$gelentel',adres='$gelenadres',kurum_id='$gelenkurum' where id='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:kullanici.php");
}else  {
	echo "güncellenemedi";
	# code...
} 
?>