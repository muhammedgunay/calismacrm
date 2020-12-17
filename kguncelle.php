<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];




$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid and id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];
  	$altel=$al["ktelefon"];
 	$aladres=$al["adres"];
 	$alkurumid=$al["k_adi"];


}


 $liste=mysqli_query(connect(),"select count(kid) from kurum");

 $sayi=mysqli_fetch_assoc($liste);
 //d($sayi);
?>

<style type="text/css">
	h1{
		
		text-shadow: rgba(155,155,155) 15px 15px 15px;
		display: -webkit-box;
		-webkit-box-pack:center;
		
	}
</style>



<form method="get" action="guncellemeonay.php" style="margin-top: 5px;">
	<h1>Müşteri Güncelle</h1>
  <div class="container">
    <div class="row">
      <div class="col-12 bg-light">

	<div class="input-group mb-3">

		<span class="input-group-text">müşteri adını giriniz:</span>
    	<input type="text" class="form-control" value="<?= $aladi?>"  name="gadi" required>
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">müşteri soyadını giriniz:</span>
  		<input type="text" class="form-control" value="<?= $alsoyadi?>"  name="gsoyadi" required>
  	</div>

  		<div class="input-group mb-3">

		<span class="input-group-text">müşteri telefonu giriniz:</span>
    	<input type="text" class="form-control" value="<?= $altel?>"  name="gtel">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">müşteri adrsini giriniz:</span>
  		<input type="text" class="form-control" value="<?= $aladres?>"  name="gadres">
  	</div>
  	<div  class="input-group mb-3">
  	  <span class="input-group-text">müşterinin kurumunu seçiniz:</span>
	<select name="gkurum"> <!-- select name si ile çağrılır optıonslar ise value ile aktalırılır.-->

	<?php 
					$listcomp= mysqli_query(connect(),"SELECT kid,k_adi from kurum");
					while($asssocWhile=mysqli_fetch_assoc($listcomp)){
						
						
					 ?> 
					
					<option value="<?php echo $asssocWhile['kid']; ?>"><?php echo  $asssocWhile['k_adi']; ?></option>
					
				
					 <?php }?> 
				</select>
	</div>
				<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
				 <div class="input-group mb-3">
  		<button class="btn btn-dark rounded-pill" type="submit">güncellemeyi tamamla</button>
  	</div>
</div>


			


      </div>
      </div>
</form>

