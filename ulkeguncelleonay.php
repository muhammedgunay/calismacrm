<?php

include 'fonksiyon.php';

$gelenulke=$_GET["gulke"];
$gelenid2=$_GET["gid"];

echo $gelenulke." ".$gelenid2;




$guncelle=mysqli_query(connect(), "update ulkeler set ulke='$gelenulke' where u_id='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:ulke.php");
}else  {
	echo "güncellenemedi";
	# code...
} 
?>