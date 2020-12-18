<?php 
include 'fonksiyon.php';
session_start();
if (isset($_SESSION['hata6'])) {
  $at="şifre yada kullanıcı adı hatalı.";
 uyari($at);
}
unset($_SESSION['hata6']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="CRMS - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Login - CRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--font style-->
        <link href="../css2.css?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body class="account-page">
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				
				<div class="container">
				
					<!-- Account Logo -->
					<div class="account-logo">
						<a><img src="assets/img/navbaricon.JPG" alt="Dreamguy's Technologies"></a>
					</div>
					<!-- /Account Logo -->
					
					<div class="account-box">
						<div class="account-wrapper">
							<h3 class="account-title">Oturum Aç</h3>
							<p class="account-subtitle">Kontrol paneline erişim</p>
							
							<!-- Account Form -->
							<form method="post" action="logina.php">
								<div class="form-group">
									<label>Kullanıcı adı</label>
									<input class="form-control" type="text" placeholder="kullanıcı adı" name="k" >
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col">
											<label>Şifre</label>
										</div>
										
									</div>
									<input class="form-control" type="password" placeholder="kullanıcı adı" name="s">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary account-btn" type="submit">Oturum Aç</button>
								</div>
								
							</form>
							<!-- /Account Form -->
							
						</div>
					</div>
				</div>
			</div>
        </div>




<!--
		<label> kullanıcı adi</label>
		<input type="text" name="k">
		<br>
		<label> şifre</label>
		<input type="text" name="s">
		<br>
		<input type="submit" value="giriş yap"> -->

<?php include 'footer.php'; ?> 