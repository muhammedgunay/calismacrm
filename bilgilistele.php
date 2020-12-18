<?php
include ('fonksiyon.php');


$gelenid=$_GET["id"];
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
    @header("location:login.php");
}

include "header.php";

$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid and id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

    $alid=$al["id"];
    $aladi=$al["adi"];
    $alsoyadi=$al["soyadi"];
    $altel=$al["ktelefon"];
    $aladres=$al["adres"];
    $alkurumid=$al["k_adi"];
    $alidd=$al['kid'];
    $alname=$al['name'];


}
?>



<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <div class="crms-title row bg-white">
            <div class="col  p-0">
                <h3 class="page-title m-0">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                      <i class="fa fa-user-o" aria-hidden="true"></i>
                  </span> Müşteri Profili </h3>
              </div>

          </div>

          <!-- Page Header -->
          <div class="page-header pt-3 mb-0">
            <form method="get" action="kguncelle.php">

                <input type="text" name="id" style="display: none;" value="<?php echo $alid ?>">
            <div class="card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img alt="" src="image/<?php echo $alname ?>"></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 ><?php echo $aladi." ".$alsoyadi;  ?></h3>


                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Telefon:</div>
                                                    <div class="text"><?php echo $altel;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><a href="">johndoe@example.com</a></div>
                                                    <hr>
                                                </li>

                                                <li>
                                                    <div class="title">Adres:</div>
                                                    <div class="text"><?php echo $aladres;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Kurum:</div>
                                                    <div class="text"><?php echo $alkurumid;  ?></div>
                                                    <hr>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="kguncelle.php?id=<?=$alid?>"><i class="fa fa-pencil"></i></a>
                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

            <?php

            $sec2 =mysqli_query(connect(),"select * from kurum where kid='$alidd'");

            while ($al2=mysqli_fetch_assoc($sec2)) {
                $alid2=$al2['kid'];
                $aladi2=$al2["k_adi"];
                $aladres2=$al2["adresi"];
                $altel2=$al2["telefon"];
                $alvergi=$al2["vergino"];
                $alaciklama=$al2["aciklama"];
                $alreferansmusteri=$al2["referansmusteri"];
                $almusteritipi=$al2["musteritipi"];
                $alresmiadi=$al2["resmiadi"];
                $alfirmakodu=$al2["firmakodu"];
                $alpostakodu=$al2["postakodu"];
                $aleposta=$al2["eposta"];


            }
            ?>

            <div class="crms-title row bg-white mb-2">
                <div class="col  p-0">
                    <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="fa fa-user-o" aria-hidden="true"></i>
                      </span> Müşterinin Bağlı Olduğu Firma Bilgileri </h3>
                  </div>

              </div>

              <div class="card ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">

                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3> <?php echo $aladi2;  ?></h3>


                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Telefon:</div>
                                                    <div class="text"><?php echo $altel2;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><?php echo $aleposta;  ?></div>
                                                    <hr>
                                                </li>

                                                <li>
                                                    <div class="title">Adres:</div>
                                                    <div class="text"><?php echo $aladres2;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Vergi No:</div>
                                                    <div class="text"><?php echo $alvergi;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Referans Müşteri:</div>
                                                    <div class="text"><?php echo $alreferansmusteri;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Müşteri Tipi:</div>
                                                    <div class="text"><?php echo $almusteritipi;  ?></div>
                                                    <hr>
                                                </li>

                                                <li>
                                                    <div class="title">Firma Resmi Adı:</div>
                                                    <div class="text"><?php echo $alresmiadi;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Firma Kodu:</div>
                                                    <div class="text"><?php echo $alfirmakodu;  ?></div>
                                                    <hr>
                                                </li>
                                                <li>
                                                    <div class="title">Posta Kodu:</div>
                                                    <div class="text"><?php echo $alpostakodu;  ?></div>
                                                    <hr>
                                                </li>

                                                <li>
                                                    <div class="title">Açıklama:</div>
                                                    <div class="text"><?php echo $alaciklama;  ?></div>
                                                    <hr>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>

        </div>
        <!-- /Page Header -->


    </div>
    <!-- /Page Content -->

</div>
<!-- /Page Wrapper -->

















































