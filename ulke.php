<?php include "header.php";include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from ulke");

?>
<div class="container">
<form method="post" action="ulkeekle.php" style="margin-left: 5px; margin-right: 5px; margin-top: 10px; ">

	<div class="input-group mb-3">

		<span class="input-group-text">ülke adını giriniz:</span>
    	<input type="text" class="form-control" placeholder="Ülke Ekle" name="ulke" required>
  	</div>
  	
  		

  	<div class="input-group mb-3" style="margin-left: 1000px;">
  		<button class="btn btn-primary" type="submit">Yeni Ülke Ekle</button>
  	</div>
			

</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col" class="table-info">id</th>
      <th scope="col" class="table-info">Ülke</th>
   
     
        <th scope="col" class="table-info">
      </th>
    </tr>
  </thead>
  <tbody>

<?php 
          $listcomp= mysqli_query(connect(),"select * from ulkeler");
          while($asssocWhile=mysqli_fetch_assoc($listcomp)){
              $alid=$asssocWhile["u_id"];
            
           ?> 
           <tr>
      <th scope="row" class="table-warning"><?php echo  $asssocWhile['u_id']; ?></th>
  
      <td class="table-warning"><?php echo  $asssocWhile['ulke']; ?></td>
      
      <td class="table-warning">  <a href="ulkeguncelle.php?id=<?=$alid?>" class="btn btn-warning" role="submit" aria-pressed="true">
      güncelle</a>
       <a href="ulkesil.php?id=<?=$alid?>" class="btn btn-danger" role="submit" aria-pressed="true">
      sil</a>
      </td>
          
        
           <?php }?> 



    </tr>

  </tbody>
</table>
</div>