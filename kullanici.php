
<?php include "header.php";?>


<?php


include 'fonksiyon.php';

session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid");

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>


<?php 
while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];
  $altel=$al["telefon"];
  $aladres=$al["adres"];
  $alkurumid=$al["k_adi"];

	# code...?>

<div class="container-fluid bg-info">
<p> id:<?= $alid ."=".$aladi." ". $alsoyadi  ?></p>
<p> i<?= $altel ." ".$aladres." ". $alkurumid  ?></p>
</div>


<div class="container ">

  
  
  <a href="ksil.php?id=<?=$alid?>" class="btn btn-danger" role="submit" data-bs-toggle="button">
  		sil</a>

  	
  <a href="kguncelle.php?id=<?=$alid?>" class="btn btn-warning" role="submit" data-bs-toggle="button">
  		güncelle</a>
  		

</div>

<hr>


<?php }?>


</body>
</html>



