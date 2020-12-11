<?php include "header.php";include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from sehir");

?>

<form method="post" action="sehirekle.php" style="margin-left: 5px; margin-right: 5px; margin-top: 10px; ">

	<div class="input-group mb-3">

		<span class="input-group-text">sehir adını giriniz:</span>
    	<input type="text" class="form-control" placeholder="Şehir Ekle" name="sehir">
  	</div>
  	
  		

  	<div class="input-group mb-3" style="margin-left: 1000px;">
  		<button class="btn btn-primary" type="submit">Yeni Şehir Ekle</button>
  	</div>
			

</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="table-info">id</th>
      <th scope="col" class="table-info">sehir</th>
   
     
        <th scope="col" class="table-info">
      </th>
    </tr>
  </thead>
  <tbody>

<?php 
          $listcomp= mysqli_query(connect(),"select * from sehir");
          while($asssocWhile=mysqli_fetch_assoc($listcomp)){
              $alid=$asssocWhile["s_id"];
            
           ?> 
           <tr>
      <th scope="row" class="table-warning"><?php echo  $asssocWhile['s_id']; ?></th>
  
      <td class="table-warning"><?php echo  $asssocWhile['sehir']; ?></td>
      
      <td class="table-warning">  <a href="sehirguncelle.php?id=<?=$alid?>" class="btn btn-warning" role="submit" data-bs-toggle="button">
      güncelle</a>
       <a href="sehirsil.php?id=<?=$alid?>" class="btn btn-danger" role="submit" data-bs-toggle="button">
      sil</a>
      </td>
          
        
           <?php }?> 



    </tr>

  </tbody>
</table>
