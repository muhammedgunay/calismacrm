



<?php include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
  @header("location:login.php");
}

include "header.php";


?>


<!-- Page Wrapper -->
<div class="page-wrapper">

  <!-- Page Content -->
  <div class="content container-fluid">


    <!-- Page Header -->
    <div class="page-header pt-3 mb-0 ">
      <div class="row">
        <div class="col">
          <div class="dropdown">

          </div>
        </div>
        <div class="col text-right">
          <ul class="list-inline-item pl-0">

            <li class="list-inline-item">
              <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_contact">Yeni Kurum Ekle</button>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /Page Header -->

    <!-- Content Starts -->
    <div class="row">
      <div class="col-md-12">
        <div class="card mb-0">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped table-nowrap custom-table mb-0 datatable">
                <thead>
                  <tr>

                    <th class="pl-5">Kurum Adı</th>
                    <th>Telefon</th>
                    <th>E-posta</th>
                    <th>Adres</th>

                    <th class="text-center">Hareketler</th>
                  </tr>
                </thead>
                <tbody>


                  <?php 
                  $listcomp= mysqli_query(connect(),"select * from kurum");
                  while($asssocWhile=mysqli_fetch_assoc($listcomp)){
                    $alid=$asssocWhile["kid"];

                    ?>


                    <tr>

                      <td>

                        <a > <?php echo  $asssocWhile['k_adi'] ?></a>
                      </td>
                      <td><?php echo  $asssocWhile['telefon']; ?>  </td>
                      <td>
                        <?php echo  $asssocWhile['eposta']; ?>
                      </td>
                      <td><?php echo  $asssocWhile['adresi']; ?>  </td>
                      
                      <td>

                        <a href="kurumsil.php?kid=<?=$alid?>" class="btn btn-danger rounded-pill" role="submit" aria-pressed="true">
                        sil</a>

                        <a href="kurumbilgileri.php?id=<?=$alid?>" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"  role="submit" aria-pressed="true">
                        bilgiler</a>
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
    <!-- /Content End -->

  </div>
  <!-- /Page Content -->

</div>
<!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->

<!--modal section starts here-->


<!-- Modal -->
<div class="modal right fade" id="add_contact" tabindex="-1" role="dialog" aria-modal="true">
  <div class="modal-dialog" role="document">
    <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title text-center">Kurum Ekle</h4>
        <button type="button" class="close xs-close" data-dismiss="modal">×</button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">


            <form method="post" action="kurum_ekle.php" enctype="multipart/form-data">
              <h4>Kurum</h4>
              <div class="form-group row">
                <div class="col-md-12"><label class="col-form-label">Kurum Adı  <span class="text-danger">*</span></label></div>

                <div class="col-md-6">
                  <input class="form-control" type="text" placeholder="Kurum Adı" name="adi" required=""  maxlength="250">
                </div>

              </div>
              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="col-form-label">Kurum Resmi Adı</label>
                  <input type="text" class="form-control" name="kurumresmi" placeholder="kurum resmi adı"  maxlength="250">
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Kurum Kodu</label>
                  <input type="text" class="form-control" name="kurumkod" placeholder="kurum kod"  maxlength="50">
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Kurum Vergi No</label>
                  <input type="text" class="form-control" name="vergi" placeholder="vergi no" maxlength="50">
                </div>



              </div>

              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="col-form-label">İlgili</label>
                  <input type="text" class="form-control" name="ilgili" placeholder="İlgili"  maxlength="50">
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Referans Müşteri</label>
                  <input type="text" class="form-control" name="referans" placeholder="Referans müşteri"  maxlength="50">
                </div>
                <div class="col-sm-4">
                  <label class="col-form-label">Müşteri Tipi</label>
                  <input type="text" class="form-control" name="tipi" placeholder="Müşteri Tipi"  maxlength="50">
                </div>



              </div>

              <h4> İletişim Detayları</h4>

              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Telefon</label>
                  <input type="text" class="form-control" name="telefon" placeholder="telefon"  maxlength="11"  minlength="11">
                </div>
                <div class="col-sm-6">
                  <label class="col-form-label">E-posta</label>
                  <input type="text" class="form-control" name="eposta" placeholder="eposta"  maxlength="250">
                </div>

              </div>

              <h4>Adres Bilgisi</h4>
              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Adres</label>
                  <textarea class="form-control" rows="3" name="adres" placeholder="adres"  maxlength="250"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-4">
                  <label class="col-form-label">ülke seçiniz</label>
                  

                  <select class="form-control" name="ulke"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                    <?php 
                    $listcomp= mysqli_query(connect(),"SELECT u_id,ulke from ulkeler");
                    while($asssocWhile=mysqli_fetch_assoc($listcomp)){


                      ?> 

                      <option value="<?php echo $asssocWhile['u_id']; ?>"><?php echo  $asssocWhile['ulke']; ?></option>


                    <?php }?> 
                  </select>
                </div>

                <div class="col-sm-4">
                  <label class="col-form-label">Şehir seçiniz</label>
                  

                  <select class="form-control" name="sehir"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                    <?php 
                    $listcomp= mysqli_query(connect(),"SELECT s_id,sehir from sehir");
                    while($asssocWhile=mysqli_fetch_assoc($listcomp)){


                      ?> 
                      
                      <option value="<?php echo $asssocWhile['s_id']; ?>"><?php echo  $asssocWhile['sehir']; ?></option>
                      
                      
                    <?php }?> 
                  </select>
                </div>

                <div class="col-sm-4">
                  <label class="col-form-label">Posta Kodu</label>


                  <select class="form-control" name="postakodu">
                    <?php
                    for ($i=1; $i <82 ; $i+=1) { ?>

                     <option value="<?php echo $i ?>"><?php echo $i ?> 0000</option>

                   <?php }?>
                 </select>




               </div>

             </div>
             <h4>Açıklama giriniz</h4>


             <div class="form-group row">
              <div class="col-sm-6">
                <label class="col-form-label">Açıklama</label>
                <textarea class="form-control" rows="3" name="aciklama" placeholder="aciklama"  maxlength="250"></textarea>
              </div>
            </div>
          




          <div class="text-center py-3">

            <button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Kaydet</button>&nbsp;&nbsp;
            <a href="kurum.php"><button type="button" class="btn btn-secondary btn-rounded">İptal</button></a>
          </div>
        </form>
      </div>
    </div>

  </div>

</div><!-- modal-content -->
</div><!-- modal-dialog -->
</div><!-- modal -->


</div><!-- modal -->



<?php include 'footer.php'; ?> 




