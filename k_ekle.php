<?php

include 'fonksiyon.php';
if ($_POST) {
	# code...

$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];
$telefon=$_POST["telefon"];
$adres=$_POST["adres"];
$kurum=$_POST["kurum"];

}

echo $adi." ". $soyadi. "". $telefon."".$adres."".$kurum." ekledi";

/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

//bağlantı
$baglanveSec= mysqli_connect($host,$kadi,$sifre,$vt);
$baglanveSec->set_charset("utf8"); */

if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into kullanici (adi,soyadi,ktelefon,adres,kurum_id) values ('$adi','$soyadi','$telefon','$adres','$kurum')");
}
if ($ekle) {
	echo "başarılı";
	@header("location:kullanici.php");
}
?>
