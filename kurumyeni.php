
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
  <div class="container">
    <div class="row">
      <div class="col-4 bg-info">

	<div class="input-group mb-3">

		<span class="input-group-text">kurum adını giriniz:</span>
    	<input type="text" class="form-control" placeholder="adı" name="adi">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum adresini giriniz:</span>
  		<input type="text" class="form-control" placeholder="adresi" name="adres">
  	</div>

  		<div class="input-group mb-3">

		<span class="input-group-text">kurum telefonu giriniz:</span>
    	<input type="text" class="form-control" placeholder="telefon" name="telefon">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum vergi no giriniz:</span>
  		<input type="text" class="form-control" placeholder="vergi no" name="vergi">
  	</div>
<div class="input-group mb-3">
      <span class="input-group-text">kurum açıklamasını giriniz:</span>
      <input type="text" class="form-control" placeholder="açiklama" name="aciklama">
    </div>
</div>
<div class="col-4 bg-info">

    <div class="input-group mb-3">
      <span class="input-group-text">ilgili:</span>
      <input type="text" class="form-control" placeholder="ilgili" name="ilgili">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Referans müşteri giriniz:</span>
      <input type="text" class="form-control" placeholder="Referans müşteri" name="referans">
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
      <input type="text" class="form-control" placeholder="Müşteri tipi" name="tipi">
    </div>  


</div>

<div class="col-4 bg-info">


    <div class="input-group mb-3">
      <span class="input-group-text"> Kurum resmi adını giriniz:</span>
      <input type="text" class="form-control" placeholder="kurum resmi" name="kurumresmi">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Kurum kodunu giriniz:</span>
      <input type="text" class="form-control" placeholder="kurum kod" name="kurumkod">
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
      <input type="text" class="form-control" placeholder="eposta" name="eposta">
    </div>
  
  
  
  

  		
  	<div class="input-group mb-3">
  		<button class="btn btn-dark" type="submit">kaydı tamamla</button>
  	</div>
			


      </div>
      </div>
</div>
</form>
