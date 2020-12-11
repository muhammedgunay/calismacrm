<?php

include 'fonksiyon.php';

$gelensehir=$_GET["gsehir"];
$gelenid2=$_GET["gid"];

echo $gelensehir." ".$gelenid2;




$guncelle=mysqli_query(connect(), "update sehir set sehir='$gelensehir' where s_id='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:sehir.php");
}else  {
	echo "güncellenemedi";
	# code...
} 
?>