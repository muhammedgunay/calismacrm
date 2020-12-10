<?php

// kulanıcı adı ve şifrsinin onaylanması işlemleri 
include 'fonksiyon.php';
session_start();



$kullaniciadi=mysqli_real_escape_string(connect(),$_POST['k']);
$sifre=mysqli_real_escape_string(connect(),$_POST['s']);



//sql sorgusu
$giris=mysqli_query(connect(), "select * from login 
	where kullaniciadi='$kullaniciadi' and 
	sifre='$sifre'");

//kulanıcı adı ve şifresinin onaylanması işlemleri
$row = mysqli_fetch_array($giris,MYSQLI_ASSOC);

$count=mysqli_num_rows($giris);

if ($count==1) {
	// session_register("kullaniciadi");
    $_SESSION['seskullanici'] = $kullaniciadi;
    $_SESSION['sessifre'] = $sifre;
	@header("location:kullanici.php"); //sayfaya götürür
}else{
	echo "şifre ya da kullanıcı adı hatalı";
}
	




?>