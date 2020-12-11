<?php

include 'fonksiyon.php';
if ($_POST) {
	# code...

$ulke=$_POST["ulke"];

}

echo $ulke;



if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into ulkeler (ulke) values ('$ulke')");
}
if ($ekle) {
	echo "başarılı";
	@header("location:ulke.php");
}
?>
