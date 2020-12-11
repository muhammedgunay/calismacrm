<?php
include 'fonksiyon.php';
$gelenid=$_GET["kid"];
echo $gelenid;



$sil=mysqli_query(connect(), "delete from kurum where kid= '$gelenid'");
if ($sil) {
	echo "başarılı";
	@header("location:kurum.php");
}
?>