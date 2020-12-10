
<?php include "header.php";?>


<?php


include 'fonksiyon.php';

session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from kurum");

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

<form method="post" action="kurumyeni.php">
    
    <div class="input-group mb-3">
      <button class="btn btn-primary" type="submit">krum ekle</button>
    </div>
</form>


<?php 
while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["kid"];
	$aladi=$al["k_adi"];
  $altel=$al["telefon"];
  $aladres=$al["adresi"];
  $alaciklama=$al["aciklama"];
  $alvergi=$al["vergino"];

	# code...?>

<div class="container-fluid bg-info">
<p> id:<?= $alid ."=".$aladi." ". $altel  ?></p>
<p> i<?=  $aladres." ".$alvergi." ". $alaciklama  ?></p>
</div>


<div class="container ">

  
  
  <a href="kurumsil.php?id=<?=$alid?>" class="btn btn-danger" role="submit" data-bs-toggle="button">
  		sil</a>
  	
  <a href="kurumguncel.php?id=<?=$alid?>" class="btn btn-warning" role="submit" data-bs-toggle="button">
  		güncelle</a>
  		

</div>

<hr>


<?php }?>


</body>
</html>



