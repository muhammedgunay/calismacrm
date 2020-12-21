

<?php include "fonksiyon.php";
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
  @header("location:login.php");
}

if (isset($_SESSION['hata'])) {
  $at="Üzgünüz, dosya zaten var.";
 uyari($at);
}
elseif (isset($_SESSION['hata2'])) {
  $at="Üzgünüz, dosyanız çok büyük.";
 uyari($at);
}
elseif (isset($_SESSION['hata3'])) {
  $at="Üzgünüz, sadece JPG, JPEG, PNG ve GIF dosyalarına izin verilmektedir.";
 uyari($at);
}
elseif (isset($_SESSION['hata4'])) {
  $at="Üzgünüz, dosyanız yüklenmedi.";
 uyari($at);
}
elseif (isset($_SESSION['hata5'])) {
  $at="Üzgünüz, dosyanızı yüklerken bir hata oluştu.";
 uyari($at);
}




unset($_SESSION['hata']);
unset($_SESSION['hata2']);
unset($_SESSION['hata3']);
unset($_SESSION['hata4']);
unset($_SESSION['hata5']);
include "header.php";
/*
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
	@header("location:login.php");
}
*/
$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid");

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
              <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_contact">Yeni Müşteri Ekle</button>
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

                    <th class="pl-5">Adı Soyadı</th>
                    <th>Telefon</th>
                    <th>Adres</th>
                    <th>Kurumu</th>
                    <th class="text-center">Hareketler</th>
                  </tr>
                </thead>
                <tbody>


                  <?php 
                  $listcomp= mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid");
                  while($asssocWhile=mysqli_fetch_assoc($listcomp)){
                    $alid=$asssocWhile["id"];

                    ?>


                    <tr>

                      <td>
                        <a  class="avatar"><img alt="" src=" image/<?php echo  $asssocWhile['name']; ?>"></a>
                        <a > <?php echo  $asssocWhile['adi']." ". $asssocWhile['soyadi']; ?></a>
                      </td>
                      <td><?php echo  $asssocWhile['ktelefon']; ?>  </td>
                      <td>
                        <?php echo  $asssocWhile['adres']; ?>
                      </td>
                      <td><?php echo  $asssocWhile['k_adi']; ?>  </td>

                      <td>
                        
                        <a href="ksil.php?id=<?=$alid?>" class="btn btn-danger rounded-pill" role="submit" aria-pressed="true">
                        sil</a>

                        <a href="bilgilistele.php?id=<?=$alid?>" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"  role="submit" aria-pressed="true">
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
        <h4 class="modal-title text-center">Müşteri Ekle</h4>
        <button type="button" class="close xs-close" data-dismiss="modal">×</button>
      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            
           
            <form method="post" action="k_ekle.php" enctype="multipart/form-data">
              <h4>İsim</h4>
              <div class="form-group row">
                <div class="col-md-12"><label class="col-form-label">Adı Soyadı <span class="text-danger">*</span></label></div>

                <div class="col-md-4">
                  <input class="form-control" type="text" placeholder="Adı" name="adi" required="" maxlength="45">
                </div>
                <div class="col-md-4">
                  <input class="form-control" type="text" placeholder="Soyadı" name="soyadi" required=""  maxlength="45">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Firma</label>
                  

                  <select class="form-control" name="kurum"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                    <?php 
                    $listcomp= mysqli_query(connect(),"SELECT kid,k_adi from kurum");
                    while($asssocWhile=mysqli_fetch_assoc($listcomp)){


                      ?> 

                      <option value="<?php echo $asssocWhile['kid']; ?>"><?php echo  $asssocWhile['k_adi']; ?></option>


                    <?php }?> 
                  </select>
                </div>

              </div>
              <h4> İletişim Detayları</h4>

              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Telefon</label>
                  <input type="text" class="form-control" name="telefon" placeholder="telefon" maxlength="10" minlength="10">
                </div>

              </div>

              <h4>Adres Bilgisi</h4>
              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Adres</label>
                  <textarea class="form-control" rows="3" name="adres" placeholder="adres"  maxlength="250"></textarea>
                </div>
              </div>

              <h4>Fotograf Seçin</h4>
              <div class="form-group row">
                <div class="col-sm-6">
                  <label class="col-form-label">Resimler jpg, png formatında olmadlıdır.</label>
                  <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
              </div>



              <div class="text-center py-3">

                <button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Kaydet</button>&nbsp;&nbsp;
                <a href="kullanici.php"><button type="button" class="btn btn-secondary btn-rounded">İptal</button></a>
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
