<?php
include 'fonksiyon.php';
$gelenid=$_GET["id"];
echo $gelenid;


$sil=mysqli_query(connect(), "delete from sehir where s_id= '$gelenid'");
if ($sil) {
	echo "başarılı";
	@header("location:sehir.php");
}
?>