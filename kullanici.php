
<?php include "header.php";?>


<?php


include 'fonksiyon.php';

session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid");

?>

<!DOCTYPE html>
<html>
<head>


	<title></title>
</head>
<body>

<!--
<?php 
while ($al=mysqli_fetch_assoc($sec)) {

  $alid=$al["id"];
  $aladi=$al["adi"];
  $alsoyadi=$al["soyadi"];
  $altel=$al["telefon"];
  $aladres=$al["adres"];
  $alkurumid=$al["k_adi"];

  # code...?>



<?php }?>

-->

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="table-info">id</th>
      <th scope="col" class="table-info">adı</th>
      <th scope="col" class="table-info">soyadı</th>
      <th scope="col" class="table-info">telefon</th>
      <th scope="col" class="table-info">adres</th>
      <th scope="col" class="table-info">kurum</th>
     
        <th scope="col" class="table-info">
        <form method="post" action="yenikayit.php">
          <div class="input-group mb-3">

            <button class="btn btn-primary" type="submit">müşteri ekle</button>
          </div>
        </form>
      </th>
    </tr>
  </thead>
  <tbody>

<?php 
          $listcomp= mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid");
          while($asssocWhile=mysqli_fetch_assoc($listcomp)){
              $alid=$asssocWhile["id"];
            
           ?> 
           <tr>
      <th scope="row" class="table-warning"><?php echo  $asssocWhile['id']; ?></th>
  
      <td class="table-warning"><?php echo  $asssocWhile['adi']; ?></td>
      <td class="table-warning"><?php echo  $asssocWhile['soyadi']; ?></td>
      <td class="table-warning"><?php echo  $asssocWhile['ktelefon']; ?></td>
      <td class="table-warning"><?php echo  $asssocWhile['adres']; ?></td>
      <td class="table-warning"><?php echo  $asssocWhile['k_adi']; ?></td>
      <td class="table-warning">  <a href="kguncelle.php?id=<?=$alid?>" class="btn btn-warning rounded-pill" role="submit" aria-pressed="true">
      güncelle</a>
       <a href="ksil.php?id=<?=$alid?>" class="btn btn-danger rounded-pill" role="submit" aria-pressed="true">
      sil</a>
      </td>
          
        
           <?php }?> 



    </tr>

  </tbody>
</table>


</body>
</html>



