<?php
include ('fonksiyon.php');

$gelenid=$_GET["id"];
echo $gelenid;

$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt);

$sec =mysqli_query(connect(),"select * from kullanici where id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];


}
?>

<form method="get" action="guncellemeonay.php">
	<input type="text" name="gadi" value="<?= $aladi?>">
	<input type="text" name="gsoyadi" value="<?= $alsoyadi?>">
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>