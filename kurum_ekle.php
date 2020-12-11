<?php

include 'fonksiyon.php';
if ($_POST) {
	# code...

$adi=$_POST["adi"];
$adres=$_POST["adres"];
$telefon=$_POST["telefon"];
$vergi=$_POST["vergi"];
$aciklama=$_POST["aciklama"];

$ilgili=$_POST["ilgili"];
$referans=$_POST["referans"];
$ulke=$_POST["ulke"];
$sehir=$_POST["sehir"];
$tipi=$_POST["tipi"];

$kurumresmi=$_POST["kurumresmi"];
$kurumkod=$_POST["kurumkod"];
$postakodu=$_POST["postakodu"];
$eposta=$_POST["eposta"];

}

echo $adi." ". $adres. "". $telefon."".$vergi."".$aciklama." ekledi";

if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into kurum (k_adi,adresi,telefon,vergino,aciklama,ilgili,referansmusteri,sehir_id,musteritipi,resmiadi,firmakodu,ulke_id,postakodu,eposta)
	values ('$adi','$adres','$telefon','$vergi','$aciklama','$ilgili','$referans','$sehir','$tipi','$kurumresmi','$kurumkod','$ulke','$postakodu',
	'$eposta')");


}
if ($ekle) {
	echo "başarılı";
	@header("location:kurum.php");
}
?>