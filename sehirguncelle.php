<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];
echo $gelenid;



$sec =mysqli_query(connect(),"select * from sehir where s_id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["s_id"];
	$alsehir=$al["sehir"];
	


}

?>

<form method="get" action="sehirguncellemeonay.php">
	<input type="text" name="gsehir" value="<?= $alsehir?>">
	
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>

