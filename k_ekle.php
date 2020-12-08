<?php
if ($_POST) {
	# code...

$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];

}

echo $adi." ". $soyadi. " ekledi";


$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

//bağlantı
$baglanveSec= mysqli_connect($host,$kadi,$sifre,$vt);
$baglanveSec->set_charset("utf8");

if ($_POST) {
	# code...

$ekle=mysqli_query($baglanveSec,"insert into kullanici (adi,soyadi) values ('$adi','$soyadi')");
}
?>
