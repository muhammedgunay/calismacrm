<?php include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}

$sec =mysqli_query(connect(),"select * from ulke");

include "header.php";
?>
<div class="page-wrapper">
  <div class="container">
    <form method="post" action="ulkeekle.php" style="margin-left: 5px; margin-right: 5px; margin-top: 10px; ">


      <div class="form-group row">
        <div class="col-sm-4">
          <label class="col-form-label">Yeni Ülke Ekle</label>
          <input type="text" class="form-control" name="ulke" placeholder="ülke"  required="">
          <button class="btn btn-primary" type="submit">Yeni Ülke Ekle</button>
        </div>


      </div>
    </form>   

  </form>


  <div class="row">
    <div class="col-md-12">
      <div class="card mb-0">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-nowrap custom-table mb-0 datatable">
              <thead>
                <tr>

                  <th class="pl-5">Ülke</th>
                  
                  

                  <th class="text-center">Hareketler</th>
                </tr>
              </thead>
              <tbody>


                <?php 
                $listcomp= mysqli_query(connect(),"select * from ulkeler");
                while($asssocWhile=mysqli_fetch_assoc($listcomp)){
                  $alid=$asssocWhile["u_id"];

                  ?> 


                  <tr>

                    <td>

                      <a > <?php echo  $asssocWhile['ulke'] ?></a>
                    </td>


                    <td>

                      <a href="ulkesil.php?id=<?=$alid?>" class="btn btn-danger rounded-pill" role="submit" aria-pressed="true">
                      sil</a>

                      <a href="ulkeguncelle.php?id=<?=$alid?>" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"  role="submit" aria-pressed="true">
                      Güncelle</a>
                    </td> 

                  <?php }?> 

                </tr>



              </tbody>
            </table>
          </div>
        </div>
      </div>    
    </div>
  </div>


  <?php include 'footer.php'; ?> 














