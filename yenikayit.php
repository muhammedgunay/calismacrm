
<?php include "header.php";include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

if (isset($_SESSION['hata'])) {
  $at="Üzgünüz, dosya zaten var.";
 uyari($at);
}
if (isset($_SESSION['hata2'])) {
  $at="Üzgünüz, dosyanız çok büyük.";
 uyari($at);
}
if (isset($_SESSION['hata3'])) {
  $at="Üzgünüz, sadece JPG, JPEG, PNG ve GIF dosyalarına izin verilmektedir.";
 uyari($at);
}
if (isset($_SESSION['hata4'])) {
  $at="Üzgünüz, dosyanız yüklenmedi.";
 uyari($at);
}
if (isset($_SESSION['hata5'])) {
  $at="Üzgünüz, dosyanızı yüklerken bir hata oluştu.";
 uyari($at);
}




unset($_SESSION['hata']);
unset($_SESSION['hata2']);
unset($_SESSION['hata3']);
unset($_SESSION['hata4']);
unset($_SESSION['hata5']);
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

<div class="container">

  <form method="post" action="k_ekle.php"  style="margin-left: 5px; margin-right: 5px; margin-top: 10px;"  enctype="multipart/form-data">
    <h1>Müşteri Ekle</h1>
    <div class="input-group mb-3">

      <span class="input-group-text">müşteri adını giriniz:</span>
      <input type="text" class="form-control" placeholder="adı" name="adi" required>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">müşteri soyadını giriniz:</span>
      <input type="text" class="form-control" placeholder="soyadı" name="soyadi" required>
    </div>

    <div class="input-group mb-3">

      <span class="input-group-text">müşteri telefonu giriniz:</span>
      <input type="text" class="form-control" placeholder="telefon" name="telefon">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text">müşteri adresi giriniz:</span>
      <input type="text" class="form-control" placeholder="adres" name="adres">
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">firma seçiniz</span>
      <select name="kurum"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
        <?php 
        $listcomp= mysqli_query(connect(),"SELECT kid,k_adi from kurum");
        while($asssocWhile=mysqli_fetch_assoc($listcomp)){


          ?> 

          <option value="<?php echo $asssocWhile['kid']; ?>"><?php echo  $asssocWhile['k_adi']; ?></option>


        <?php }?> 
      </select>

    </div>
    <input type="file" name="fileToUpload" id="fileToUpload">


    <div class="input-group mb-3">
      <button class="btn btn-primary rounded-pill" style="margin-top: 5px;" type="submit">kaydı tamamla</button>
    </div>





  </form>
</div>

