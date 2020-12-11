<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];
echo $gelenid;



$sec =mysqli_query(connect(),"select * from ulkeler where u_id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["u_id"];
	$alsehir=$al["ulke"];
	


}

?>

<form method="get" action="ulkeguncelleonay.php">
	<input type="text" name="gulke" value="<?= $alsehir?>">
	
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>

