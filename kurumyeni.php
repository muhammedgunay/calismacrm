
<?php include "header.php";
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



<form method="post" action="kurum_ekle.php">

	<div class="input-group mb-3">

		<span class="input-group-text">kurum adını giriniz:</span>
    	<input type="text" class="form-control" placeholder="adı" name="adi">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum adresini giriniz:</span>
  		<input type="text" class="form-control" placeholder="soyadı" name="adres">
  	</div>

  		<div class="input-group mb-3">

		<span class="input-group-text">kurum telefonu giriniz:</span>
    	<input type="text" class="form-control" placeholder="telefon" name="telefon">
  	</div>
  	<div class="input-group mb-3">
  		<span class="input-group-text">kurum vergi no giriniz:</span>
  		<input type="text" class="form-control" placeholder="adres" name="vergi">
  	</div>
<div class="input-group mb-3">
      <span class="input-group-text">kurum açıklamasını giriniz:</span>
      <input type="text" class="form-control" placeholder="adres" name="aciklama">
    </div>
  

  		
  	<div class="input-group mb-3">
  		<button class="btn btn-primary" type="submit">kaydı tamamla</button>
  	</div>
			

</form>
