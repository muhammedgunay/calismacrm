<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="CRMS - Bootstrap Admin Template">
  <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
  <meta name="author" content="Dreamguys - Bootstrap Admin Template">
  <meta name="robots" content="noindex, nofollow">
  <title>Contacts - CRMS admin template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">

  <!--font style-->
  <link href="../css2.css?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">

  <!-- Lineawesome CSS -->
  <link rel="stylesheet" href="assets/css/line-awesome.min.css">

  <!-- Select2 CSS -->
  <link rel="stylesheet" href="assets/css/select2.min.css">

  <!-- Datetimepicker CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

  <!-- Datatable CSS -->
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="assets/css/theme-settings.css">


  <!-- Main CSS -->
  <link rel="stylesheet" href="assets/css/style.css">


</head>
<body id="skin-color" class="inter">
  <!-- Main Wrapper -->
  <div class="main-wrapper">

    <!-- Header -->
    <div class="header" id="heading">

      <!-- Logo -->
      <div class="header-left">
        <a href="kullanici.php" class="logo">
          <img src="assets/img/navbaricon.JPG" alt="Logo" class="sidebar-logo mt-3">
          <img src="assets/img/navbaricon.JPG" alt="Logo" class="mini-sidebar-logo mt-3">
        </a>
      </div>
      <!-- /Logo -->

      <a id="toggle_btn" class="mt-3" href="javascript:void(0);">
        <span class="bar-icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </a>

      <!-- Header Title -->
      <div class="page-title-box">
        <div class="top-nav-search">
          <a href="javascript:void(0);" class="responsive-search">
            <i class="fa fa-search"></i>
          </a>
          <form action="search.html">
            <input class="form-control" type="text" placeholder="Search here">
            <button class="btn" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
      <!-- /Header Title -->

      <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

      <!-- Header Menu -->
      <ul class="nav user-menu">

        <!-- Search -->
        <li class="nav-item">

        </li>
        <!-- /Search -->
        
        <!-- Flag -->

        <!-- /Message Notifications -->

        <li class="nav-item dropdown has-arrow main-drop">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img src="image/images.png" alt="">

              <span>Admin</span>
            </span></a>
            <div class="dropdown-menu">
           
              <!--<a class="dropdown-item" href="settings.html">Settings</a> -->
              <a class="dropdown-item" href="cikisyap.php">Çıkış Yap</a>
            </div>
          </li>
        </ul>
        <!-- /Header Menu -->
        
        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
            
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="cikisyap.php">Çıkış Yap</a>
          </div>
        </div>
        <!-- /Mobile Menu -->
        
      </div>
      <!-- /Header -->
      
      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <form action="search.html" class="mobile-view">
            <input class="form-control" type="text" placeholder="Search here">
            <button class="btn" type="button"><i class="fa fa-search"></i></button>
          </form>
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>

              <li class="menu-title"> 
                <span>Menü</span>
              </li>
              <!--
              <li class="submenu">
                <a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span> Müşteriler</span> <span class="menu-arrow"></span></a>
                <ul class="sub-menus">
                  <li><a href="index.html">Deals Dashboard</a></li>
                  <li><a href="projects-dashboard.html">Projects Dashboard</a></li>
                  <li><a href="leads-dashboard.html">Leads Dashboard</a></li>
                </ul>
              </li>
            -->

            <li> 
              <a href="kullanici.php"><i class="fa fa-address-book-o" aria-hidden="true"></i> <span>Müşteriler</span></a>
            </li>
            
            <li> 
              <a href="kurum.php"><i class="fa fa-building-o" aria-hidden="true"></i> <span>Firmalar</span></a>
            </li>
            
            
            <li class="menu-title"> 
              <span>Sayfalar</span>
            </li>
            
            <li class="submenu">
              <a href="#"><i class="fa fa-columns" aria-hidden="true"></i> <span> Şehir Ülke </span> <span class="menu-arrow"></span></a>
              <ul class="sub-menus">
                <li><a href="ulke.php">Ülkeler </a></li>
                <li><a href="sehir.php">Şehirler </a></li>
              </ul>
            </li>
            
           
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
      <!-- /Sidebar -->