<?php
include 'fonksiyon.php';
$gelenid=$_GET["id"];
echo $gelenid;

$sildosya=mysqli_query(connect(),"select name from kullanici where id='$gelenid'");
$sil=mysqli_query(connect(), "delete from kullanici where id= '$gelenid'");
if ($sil) {
	
	while($sec=mysqli_fetch_assoc($sildosya)){
		$a=$sec['name'];
		unlink("image/".$a);
	}

	echo "başarılı";
	echo "image/".$a;@header("location:kullanici.php");
}





?>