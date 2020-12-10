

<?php

function topla($sayi1,$sayi2){

	$sonuc=$sayi1+$sayi2;
	echo "toplama sonucu ". $sonuc."<br>";

}



function carp($deger1,$deger2){
	$sonuc=$deger2*$deger1;
	echo "carpım sonucu ".$sonuc;
}



function connect(){

$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";
$baglan=mysqli_connect($host,$kadi,$sifre,$vt);
$baglan->set_charset("utf8");

return $baglan;
}

function dd($dd){
	return var_dump($dd);
}
function d($dd){
	return print_r($dd);
}
?>