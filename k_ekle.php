<?php

include 'fonksiyon.php';


$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if ($_POST) {
	# code...

$adi=$_POST["adi"];
$soyadi=$_POST["soyadi"];
$telefon=$_POST["telefon"];
$adres=$_POST["adres"];
$kurum=$_POST["kurum"];


 $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  $name = $_FILES['fileToUpload']['name'];

  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}





if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif"  ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

echo $adi." ". $soyadi. "". $telefon."".$adres."".$kurum." ekledi";

/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

//bağlantı
$baglanveSec= mysqli_connect($host,$kadi,$sifre,$vt);
$baglanveSec->set_charset("utf8"); */

if ($_POST) {
	# code...

$ekle=mysqli_query(connect(),"insert into kullanici (adi,soyadi,ktelefon,adres,kurum_id,name) values ('$adi','$soyadi','$telefon','$adres',
	'$kurum','$name')");
}
if ($ekle) {
	echo "başarılı";
	@header("location:kullanici.php");
}
?>
