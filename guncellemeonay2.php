<?php

include 'fonksiyon.php';
session_start();

$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($_POST) {
	# code...

$gelenadi=$_POST["gadi"];
$gelensoyadi=$_POST["gsoyadi"];
$gelentel=$_POST["gtel"];
$gelenadres=$_POST["gadres"];
$gelenkurum=$_POST["gkurum"];
$gelenid2=$_POST["gid"];



 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $name = $_FILES['fileToUpload']['name'];

  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {

    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  $_SESSION['hata'] = "hata";
  @header("location:kullanici.php");
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
$_SESSION['hata2'] = "hata";
  @header("location:kullanici.php");
$uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"  ) {
$_SESSION['hata3'] = "hata";
  @header("location:kullanici.php");
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
$_SESSION['hata4'] = "hata";
  @header("location:kullanici.php");
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";



if ($_POST) {
	# code...

$sildosya=mysqli_query(connect(),"select name from kullanici where id='$gelenid2'");
$guncelle=mysqli_query(connect(), "update kullanici set adi='$gelenadi',soyadi='$gelensoyadi'
	,ktelefon='$gelentel',adres='$gelenadres',kurum_id='$gelenkurum',name='$name' where id='$gelenid2'");
}
if ($guncelle) {
  while($sec=mysqli_fetch_assoc($sildosya)){
    $a=$sec['name'];
    unlink("image/".$a);
  }
	echo "başarılı";
	@header("location:kullanici.php");
}



  } else {


$_SESSION['hata5'] = "hata";

  }
}












/*

$guncelle=mysqli_query(connect(), "update kullanici set adi='$gelenadi',soyadi='$gelensoyadi'
	,ktelefon='$gelentel',adres='$gelenadres',kurum_id='$gelenkurum' where id='$gelenid2'");
if ($guncelle) {
	echo "başarılı";
	@header("location:kullanici.php");
}else  {
	echo "güncellenemedi";
	# code...
} */
?>