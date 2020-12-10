<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];
echo $gelenid;



$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid and id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];
  	$altel=$al["telefon"];
 	$aladres=$al["adres"];
 	$alkurumid=$al["k_adi"];


}


 $liste=mysqli_query(connect(),"select count(kid) from kurum");

 $sayi=mysqli_fetch_assoc($liste);
 //d($sayi);
?>

<form method="get" action="guncellemeonay.php">
	<input type="text" name="gadi" value="<?= $aladi?>">
	<input type="text" name="gsoyadi" value="<?= $alsoyadi?>">
	<input type="text" name="gtel" value="<?= $altel?>">
	<input type="text" name="gadres" value="<?= $aladres?>">

	<select name="gkurum"> <!-- select name si ile çağrılır optıonslar ise value ile aktalırılır.-->
	<?php 
					$listcomp= mysqli_query(connect(),"SELECT kid,k_adi from kurum");
					while($asssocWhile=mysqli_fetch_assoc($listcomp)){
						
						
					 ?> 
					
					<option value="<?php echo $asssocWhile['kid']; ?>"><?php echo  $asssocWhile['k_adi']; ?></option>
					
				
					 <?php }?> 
				</select>
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>

