<?php

include 'fonksiyon.php';
if ($_POST) {
	# code...

$adi=$_POST["adi"];
$adres=$_POST["adres"];
$telefon=$_POST["telefon"];
$vergi=$_POST["vergi"];
$aciklama=$_POST["aciklama"];

}

echo $adi." ". $adres. "". $telefon."".$vergi."".$aciklama." ekledi";

if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into kurum (k_adi,adresi,telefon,vergino,aciklama) values ('$adi','$adres','$telefon','$vergi','$aciklama')");


}
if ($ekle) {
	echo "başarılı";
	@header("location:kurum.php");
}
?>