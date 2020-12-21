<?php
include ('fonksiyon.php');
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
  @header("location:login.php");
}
include 'header.php';

$gelenid=$_GET["kid"];



$sec =mysqli_query(connect(),"select * from kurum where kid='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {


    $alid=$al["kid"];
    $aladi=$al["k_adi"];
    $altel=$al["telefon"];
    $aladres=$al["adresi"];
    $alaciklama=$al["aciklama"];
    $alvergi=$al["vergino"];
    $alilgili=$al["ilgili"];
    $alreferansmusteri=$al["referansmusteri"];
    $alsehir=$al["sehir_id"];
    $altipi=$al["musteritipi"];
    $alresmiadi=$al["resmiadi"];
    $alfirmakodu=$al["firmakodu"];
    $alulke=$al["ulke_id"];
    $alpostakodu=$al["postakodu"];
    $aleposta=$al["eposta"];



}

?>



<div class="page-wrapper">
    <div class="container">


        <form method="get" action="kurumguncelonay.php">
            <h3>Kurum Detayları</h3>
            <div class="form-group row">
                <div class="col-md-12"><label class="col-form-label">Kurum Adı <span class="text-danger">*</span></label></div>

                <div class="col-md-4">
                    <input class="form-control" type="text" placeholder="Adı" name="gadi"  value="<?= $aladi?>" required >
                </div>

            </div>


            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label">Resmi Adı</label>
                    <input type="text" class="form-control" name="gkurumresmi" placeholder="Resmi Adı"  value="<?= $alresmiadi?>" >

                </div>
                <div class="col-sm-4">
                    <label class="col-form-label">Kurum Kodu</label>
                    <input type="text" class="form-control" name="gkurumkod" placeholder="kurum kodu"  value="<?= $alfirmakodu?>" >

                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Kurum Vergi No</label>
                    <input type="text" class="form-control" name="gvergi" placeholder="telefon"  value="<?= $alvergi?>" >

                </div>

            </div>

            <div class="form-group row">
                <div class="col-sm-4">
                    <label class="col-form-label">İlgili</label>
                    <input type="text" class="form-control" name="gilgili" placeholder="İlgili"  value="<?= $alilgili?>" >

                </div>
                <div class="col-sm-4">
                    <label class="col-form-label">Referans Müşteri</label>
                    <input type="text" class="form-control" name="greferans" placeholder="Referans Müşteri"  value="<?= $alreferansmusteri?>" >

                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Müşteri Tipi</label>
                    <input type="text" class="form-control" name="gtipi" placeholder="Müşteri Tipi"  value="<?= $altipi?>" >

                </div>
                <div class="col-sm-12">

                    <hr style="border-color: blue;">
                </div>

            </div>


            <h3> İletişim Detayları</h3>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">Telefon</label>
                    <input type="text" class="form-control" name="gtelefon" placeholder="telefon"  value="<?= $altel?>" >

                </div>

                <div class="col-sm-6">
                    <label class="col-form-label">E-posta</label>
                    <input type="text" class="form-control" name="geposta" placeholder="telefon"  value="<?= $aleposta?>" >
                    
                </div>
                <div class="col-sm-12">

                    <hr style="border-color: blue;">
                </div>

            </div>

            <h3>Adres Bilgisi</h3>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="col-form-label">Adres</label>

                    <input type="text" class="form-control" name="gadres" placeholder="gadres"  value="<?= $aladres?>" >

                </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    
                    <label class="col-form-label">Ülke</label>
                    <select  class="form-control" name="gulke"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
                        <?php 
                        $listcomp= mysqli_query(connect(),"SELECT u_id,ulke from ulkeler");
                        while($asssocWhile=mysqli_fetch_assoc($listcomp)){


                            ?> 

                            <option value="<?php echo $asssocWhile['u_id']; ?>"><?php echo  $asssocWhile['ulke']; ?></option>


                        <?php }?> 
                    </select>

                </div>

                <div class="col-sm-4">
                    <label class="col-form-label">Şehir</label>
                    <select class="form-control" name="gsehir"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
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
                <select class="form-control" name="gpostakodu">
                    <?php
                    for ($i=1; $i <82 ; $i+=1) { ?>

                     <option value="<?php echo $i ?>"><?php echo $i ?> 0000</option>

                 <?php }?>
             </select>

         </div>

         <div class="col-sm-12">

            <hr style="border-color: blue;">
        </div>

    </div>


    <h3>Ackklama</h3>
    <div class="form-group row">
        <div class="col-sm-6">
            <label class="col-form-label">Açıklama</label>

            <input type="text" class="form-control" name="gaciklama" placeholder="açıklama"  value="<?= $alaciklama?>" >

        </div>

    </div>



    <input type="text" name="gid" value="<?= $alid?>" style="display: none;">

    <div class="text-center py-3">

        <button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Güncelleme Onayla</button>&nbsp;&nbsp;
        <a href="kurum.php"><button type="button" class="btn btn-secondary btn-rounded">İptal</button></a>
    </div>
</form>


</div>






<?php include 'footer.php'; ?> 
