<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
    @header("location:login.php");
}



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
<style type="text/css">
  h1{
    
    text-shadow: rgba(155,155,155) 15px 15px 15px;
    display: -webkit-box;
    -webkit-box-pack:center;
    
  }
</style>
<h1> Müşteri Bilgileri </h1>
<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="image/<?php echo $alname ?>" alt=""/>

                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row ">
                            <div class="col-md-6">
                                <label>Müşteri id:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alid;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Adı Soyadı:</label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php echo $aladi." ". $alsoyadi;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Telefon:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $altel;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Adresi:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $aladres;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kurumu:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alkurumid;  ?></p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </form>           
</div>

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
<h1>Kurum Bilgileri</h1>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="" alt=""/>

                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Kurum id:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alid2;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label> Kurum Adı: </label>
                            </div>
                            <div class="col-md-6">
                                <p> <?php echo $aladi2;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Telefon:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $altel2;  ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Adresi:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $aladres2;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Kurum Vergi No:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alvergi;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Acıklama:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alaciklama;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Referans Müşteri:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alreferansmusteri;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Müsteri Tipi:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $almusteritipi;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Kurum Resmi Adı:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alresmiadi;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Firma Kodu:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alfirmakodu;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>Posta Kodu:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $alpostakodu;  ?></p>
                            </div>
                        </div>
                        <hr>
                         <div class="row">
                            <div class="col-md-6">
                                <label>E-Posta:</label>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $aleposta;  ?></p>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </form>           
</div>