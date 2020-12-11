<?php

include 'fonksiyon.php';
if ($_POST) {
	# code...

$sehir=$_POST["sehir"];

}

echo $sehir;



if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into sehir (sehir) values ('$sehir')");
}
if ($ekle) {
	echo "başarılı";
	@header("location:sehir.php");
}
?>
