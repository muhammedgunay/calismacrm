<?php include "header.php";
include 'fonksiyon.php';
session_start();
if (isset($_SESSION['hata6'])) {
  $at="şifre yada kullanıcı adı hatalı.";
 uyari($at);
}
unset($_SESSION['hata6']);
?>

<!DOCTYPE html>
<html>
<head>

	    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel = "stylesheet" href = "css / animate.css">
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  

	
	<title></title>
</head>
<body>

	

	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	 <script src = "js / wow.min.js"> </script>
              <script>
              yeni WOW (). init ();
              </script>


	<div class="wow slideInDown" style="margin: 0 auto; margin-top: 150px; width: 300px; height: 300px;" >
		<form method="post" action="logina.php">


	<div class="input-group mb-3">

		<span class="input-group-text bg-info">kullanıcı adı:</span>
    	<input type="text" class="form-control" placeholder="kullanıcı adı" name="k">
  	</div>

  	<div class="input-group mb-3">

		<span class="input-group-text bg-info">kullanıcı adı:</span>
    	<input type="password" class="form-control" placeholder="kullanıcı adı" name="s">
  	</div>

  	<div class="input-group mb-3">
  		<button class="btn btn-primary rounded-pill" type="submit">Giriş Yap</button>
  	</div>

	
	</form>
	</div>





<!--
		<label> kullanıcı adi</label>
		<input type="text" name="k">
		<br>
		<label> şifre</label>
		<input type="text" name="s">
		<br>
		<input type="submit" value="giriş yap"> -->


</body>
</html>