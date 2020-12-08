<form method="post" action="k_ekle.php">
	<input type="text" name="adi" placeholder="adi">
	<input type="text" name="soyadi" placeholder="soyadı">
	<input type="submit" name="ekle" value="ekle">

</form>

<?php

session_start();



$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

//bağlantı
$baglanveSec= mysqli_connect($host,$kadi,$sifre,$vt);
$baglanveSec->set_charset("utf8");

if ($baglanveSec) {
	echo "<br>";
	echo " bağlantı başarılı <br>";
	echo "<hr>";
}

//sorgu
$sec =mysqli_query($baglanveSec,"select * from kullanici");

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];
	# code...?>
<p>id: <?= $alid ?></p> 
<p><?= $aladi." ". $alsoyadi  ?></p>

<form>
	
	<a href="ksil.php?id=<?=$alid?>"> sil </a>
	

</form>
<form>
	<a href="kguncelle.php?id=<?=$alid?>"> güncelle </a>
</form>
<hr>
<?php }?>


</body>
</html>



