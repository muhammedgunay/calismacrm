
<?php include "header.php";
include 'fonksiyon.php';
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>

<style type="text/css">
  h1{
    
    text-shadow: rgba(155,155,155) 15px 15px 15px;
    display: -webkit-box;
    -webkit-box-pack:center;
  
    
  }
</style>


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>

<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>



<form method="post" action="kurum_ekle.php" style="margin-top: 5px;">

  <h1>Kurum Ekle</h1>
  <div class="container">
    <div class="row">
      <div class="col-4 bg-info pt-3">

	<div class="input-group mb-3">

		<span class="input-group-text">kurum adını giriniz:</span>
    	<input type="text" class="form-control" placeholder="adı" required name="adi" maxlength="250">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum adresini giriniz:</span>
  		<input type="text" class="form-control" placeholder="adresi" name="adres" maxlength="250">
  	</div>

  		<div class="input-group mb-3">

		<span class="input-group-text">kurum telefonu giriniz:</span>
    	<input type="text" class="form-control" placeholder="telefon" name="telefon"  maxlength="11" minlength="10">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum vergi no giriniz:</span>
  		<input type="text" class="form-control" placeholder="vergi no" name="vergi" maxlength="30">
  	</div>
<div class="input-group mb-3">
      <span class="input-group-text">kurum açıklamasını giriniz:</span>
      <input type="text" class="form-control" placeholder="açiklama" name="aciklama" maxlength="250">
    </div>
</div>
<div class="col-4 bg-info pt-3">

    <div class="input-group mb-3">
      <span class="input-group-text">ilgili:</span>
      <input type="text" class="form-control" placeholder="ilgili" name="ilgili" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Referans müşteri giriniz:</span>
      <input type="text" class="form-control" placeholder="Referans müşteri" name="referans" maxlength="45">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Ülke Seçiniz:</span>
      <select name="ulke"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
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
                  <select name="sehir"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
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
      <input type="text" class="form-control" placeholder="Müşteri tipi" name="tipi" maxlength="50">
    </div>  


</div>

<div class="col-4 bg-info pt-3">


    <div class="input-group mb-3">
      <span class="input-group-text"> Kurum resmi adını giriniz:</span>
      <input type="text" class="form-control" placeholder="kurum resmi" name="kurumresmi" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Kurum kodunu giriniz:</span>
      <input type="text" class="form-control" placeholder="kurum kod" name="kurumkod" maxlength="250">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Posta kodu seçiniz:</span>
     

      <select name="postakodu">
        <?php
        for ($i=1; $i <82 ; $i+=1) { ?>
           
           <option value="<?php echo $i ?>"><?php echo $i ?> 0000</option>
       
       <?php }?>
      </select>

    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Eposta adrsini giriniz:</span>
      <input type="text" class="form-control" placeholder="eposta" name="eposta" maxlength="250">
    </div>
  
  
  
  

  		
  	<div class="input-group mb-3">
  		<button class="btn btn-dark rounded-pill" type="submit">kaydı tamamla</button>
  	</div>
			


      </div>
      </div>
</div>
</form>
