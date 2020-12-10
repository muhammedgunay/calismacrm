<?php
include ('fonksiyon.php');

$gelenid=$_GET["id"];
echo $gelenid;

/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt); */

$sec =mysqli_query(connect(),"select * from kurum where kid='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {


	$alid=$al["kid"];
	$aladi=$al["k_adi"];
 	$altel=$al["telefon"];
 	$aladres=$al["adresi"];
	$alaciklama=$al["aciklama"];
	$alvergi=$al["vergino"];



}
?>

<form method="get" action="kurumguncelonay.php">
	<input type="text" name="gadi" value="<?= $aladi?>">
	<input type="text" name="gtel" value="<?= $altel?>">
	<input type="text" name="gadres" value="<?= $aladres?>">
	<input type="text" name="gvergi" value="<?= $alvergi?>">
	<input type="text" name="gacikla" value="<?= $alaciklama?>">

	
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>