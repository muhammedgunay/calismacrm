<?php
include 'fonksiyon.php';
$gelenid=$_GET["id"];
echo $gelenid;



$sil=mysqli_query(connect(), "delete from kurum where id= '$gelenid'");
if ($sil) {
	echo "başarılı";
	@header("location:kurum.php");
}
?>