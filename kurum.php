
<?php include "header.php";?>


<?php


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


<!--
  $sec =mysqli_query(connect(),"select * from kurum");
<?php 
while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["kid"];
	$aladi=$al["k_adi"];
  $altel=$al["telefon"];
  $aladres=$al["adresi"];
  $alaciklama=$al["aciklama"];
  $alvergi=$al["vergino"];

	# code...?>


<?php }?>
-->

<table class="table align-middle  table-striped">
  <thead>
    <tr>
      <th scope="col" class="table-info">id</th>
      <th scope="col"class="table-info">Kurum adı</th>     
      <th scope="col"class="table-info">Telefon</th>
      <th scope="col"class="table-info">Adres</th>
      <th scope="col" class="table-info">Vergi no</th>
      <th scope="col" class="w-25  table-info ">Açıklama</th>
      <th scope="col"class="table-info">E posta</th>
      <th scope="col"class="table-info">
        <form method="post" action="kurumyeni.php">
          <div class="input-group mb-3">

            <button class="btn btn-primary" type="submit">kurum ekle</button>
          </div>
        </form>
      </th>
    </tr>

  </thead>
  <tbody>

<?php 
          $listcomp= mysqli_query(connect(),"select * from kurum");
          while($asssocWhile=mysqli_fetch_assoc($listcomp)){
          $alid=$asssocWhile["kid"];
            
           ?> 
           <tr class="align-top">
      <th scope="row"><?php echo  $asssocWhile['kid']; ?></th>
  
      <td><?php echo  $asssocWhile['k_adi']; ?></td>
      <td><?php echo  $asssocWhile['telefon']; ?></td>
      <td><?php echo  $asssocWhile['adresi']; ?></td>
      <td><?php echo  $asssocWhile['vergino']; ?></td>
      <td><?php echo  $asssocWhile['aciklama']; ?></td>
        <td><?php echo  $asssocWhile['eposta']; ?></td>
      <td>  <a href="kurumguncel.php?kid=<?=$alid?>" class="btn btn-warning rounded-pill" role="submit" aria-pressed="true">
      güncelle</a>
       <a href="kurumsil.php?kid=<?=$alid?>" class="btn btn-danger rounded-pill" role="submit" aria-pressed="true">
      sil</a>
      </td>
          
        
           <?php }?> 



    </tr>

  </tbody>
</table>


</body>
</html>


<?php include 'footer.php'; ?> 
