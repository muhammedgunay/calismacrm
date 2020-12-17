<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

   <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title></title>
</head>
<body>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


	<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #e3f1fd; ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">KUVARSSOFT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      	 <li class="nav-item" style="background-color: #f1f1f1;">
          <a class="nav-link active" aria-current="page" href="login.php">Giriş Yap</a>
        </li>

        <li class="nav-item" style="background-color: #efffff;">
          <a class="nav-link active" aria-current="page" href="kullanici.php">Müşterileri Listele</a>
        </li>

      

        <li class="nav-item"style="background-color: #f1f1f1;">
          <a class="nav-link active" href="kurum.php"> Kurumları Listele </a>
        </li>
        
    <li class="nav-item dropdown" style="background-color: #efffff;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Şehir-Ülke
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li ><a class="dropdown-item" href="sehir.php">Şehirler</a></li>
            <li><a class="dropdown-item" href="ulke.php">Ülkeler</a></li>
           
            
          </ul>
        </li>

          <li class="nav-item dropdown" style="background-color: #f1f1f1;">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Çıkıs Yap
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cikisyap.php">Çıkış</a></li>
            
            
          </ul>
        </li>


        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
	
</body>
</html>