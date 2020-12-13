<?php
include ('fonksiyon.php');
include 'header.php';

$gelenid=$_GET["kid"];
echo $gelenid;

/*
$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";

$baglan=mysqli_connect($host,$kadi,$sifre,$vt); */

$sec =mysqli_query(connect(),"select * from kurum where kid='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {


	$alid=$al["kid"];
	$aladi=$al["k_adi"];
 	$altel=$al["telefon"];
 	$aladres=$al["adresi"];
	$alaciklama=$al["aciklama"];
	$alvergi=$al["vergino"];
	$alilgili=$al["ilgili"];
	$alreferansmusteri=$al["referansmusteri"];
	$alsehir=$al["sehir_id"];
	$altipi=$al["musteritipi"];
	$alresmiadi=$al["resmiadi"];
	$alfirmakodu=$al["firmakodu"];
	$alulke=$al["ulke_id"];
	$alpostakodu=$al["postakodu"];
	$aleposta=$al["eposta"];



}
?>
<!--
<form method="get" action="kurumguncelonay.php">
	<input type="text" name="gadi" value="<?= $aladi?>">
	<input type="text" name="gtel" value="<?= $altel?>">
	<input type="text" name="gadres" value="<?= $aladres?>">
	<input type="text" name="gvergi" value="<?= $alvergi?>">
	<input type="text" name="gacikla" value="<?= $alaciklama?>">

	
	<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
	
 <input type="submit" value="gonder"> </a>


</form>
-->

<style type="text/css">
	h1{
		
		text-shadow: rgba(155,155,155) 15px 15px 15px;
		display: -webkit-box;
		-webkit-box-pack:center;
		
	}
</style>


<form method="get" action="kurumguncelonay.php" style="margin-top: 5px;">
	<h1>Kurum Güncelle</h1>
  <div class="container">
    <div class="row">
      <div class="col-4 bg-light">

	<div class="input-group mb-3">

		<span class="input-group-text">kurum adını giriniz:</span>
    	<input type="text" class="form-control" value="<?= $aladi?>"  name="gadi" maxlength="250">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum adresini giriniz:</span>
  		<input type="text" class="form-control" value="<?= $aladres?>"  name="gadres" maxlength="250">
  	</div>

  		<div class="input-group mb-3">

		<span class="input-group-text">kurum telefonu giriniz:</span>
    	<input type="text" class="form-control" value="<?= $altel?>"  name="gtelefon" maxlength="11">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum vergi no giriniz:</span>
  		<input type="text" class="form-control" value="<?= $alvergi?>"  name="gvergi" maxlength="30">
  	</div>
<div class="input-group mb-3">
      <span class="input-group-text">kurum açıklamasını giriniz:</span>
      <input type="text" class="form-control" value="<?= $alaciklama?>"  name="gaciklama" maxlength="250">
    </div>
</div>
<div class="col-4 bg-light">

    <div class="input-group mb-3">
      <span class="input-group-text">ilgili:</span>
      <input type="text" class="form-control" value="<?= $alilgili?>"  name="gilgili" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Referans müşteri giriniz:</span>
      <input type="text" class="form-control" value="<?= $alreferansmusteri?>"  name="greferans" maxlength="45">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Ülke Seçiniz:</span>
      <select name="gulke"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                    <?php 
                    $listcomp= mysqli_query(connect(),"SELECT u_id,ulke from ulkeler");
                    while($asssocWhile=mysqli_fetch_assoc($listcomp)){
            
            
                    ?> 
          
          <option value="<?php echo $asssocWhile['u_id']; ?>"><?php echo  $asssocWhile['ulke']; ?></option>
          
        
          <?php }?> 
     </select>
    

    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Şehir seçiniz:</span>
                  <select name="gsehir"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                    <?php 
                    $listcomp= mysqli_query(connect(),"SELECT s_id,sehir from sehir");
                    while($asssocWhile=mysqli_fetch_assoc($listcomp)){
            
            
                  ?> 
          
          <option value="<?php echo $asssocWhile['s_id']; ?>"><?php echo  $asssocWhile['sehir']; ?></option>
          
        
           <?php }?> 
        </select>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Müşteri tipini giriniz:</span>
      <input type="text" class="form-control" value="<?= $altipi?>"  name="gtipi" maxlength="50">
    </div>  


</div>

<div class="col-4 bg-light">


    <div class="input-group mb-3">
      <span class="input-group-text"> Kurum resmi adını giriniz:</span>
      <input type="text" class="form-control" value="<?= $alresmiadi?>"  name="gkurumresmi" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Kurum kodunu giriniz:</span>
      <input type="text" class="form-control" value="<?= $alfirmakodu?>"  name="gkurumkod" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Posta kodu seçiniz:</span>
     

      <select name="gpostakodu">
        <?php
        for ($i=1; $i <82 ; $i+=1) { ?>
           
           <option value="<?php echo $i ?>"><?php echo $i ?> 0000</option>
       
       <?php }?>
      </select>

    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Eposta adrsini giriniz:</span>
      <input type="text" class="form-control" value="<?= $aleposta?>"  name="geposta" maxlength="250">
    </div>
  
  
  
  <input type="text" name="gid" value="<?= $alid?>" style="display: none;">

  		
  	<div class="input-group mb-3">
  		<button class="btn btn-dark rounded-pill" type="submit">güncellemeyi tamamla</button>
  	</div>
			


      </div>
      </div>
</div>
</form>
