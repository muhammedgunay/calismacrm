<?php
include ('fonksiyon.php');


$gelenid=$_GET["id"];
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
          <div class="page-header pt-3 mb-0">
     

            <?php

            $sec2 =mysqli_query(connect(),"select * from kurum where kid='$gelenid'");

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
                      </span> Firma Bilgileri </h3>
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
                                  <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="kurumguncel.php?kid=<?=$alid2?>"><i class="fa fa-pencil"></i></a>
                                   
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



















































