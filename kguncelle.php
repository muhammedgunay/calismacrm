<?php
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];




$sec =mysqli_query(connect(),"select * from kullanici,kurum where kullanici.kurum_id=kurum.kid and id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];
	$aladi=$al["adi"];
	$alsoyadi=$al["soyadi"];
	$altel=$al["ktelefon"];
	$aladres=$al["adres"];
	$alkurumid=$al["k_adi"];
	$alname=$al["name"];


}


$liste=mysqli_query(connect(),"select count(kid) from kurum");

$sayi=mysqli_fetch_assoc($liste);
 //d($sayi);
?>

<style type="text/css">
	h1{
		
		text-shadow: rgba(155,155,155) 15px 15px 15px;
		display: -webkit-box;
		-webkit-box-pack:center;
		
	}
</style>

<div class="page-wrapper">
	<div class="container">








		<form method="get" action="guncellemeonay.php" enctype="multipart/form-data">
			<h3>İsim</h3>
			<div class="form-group row">
				<div class="col-md-12"><label class="col-form-label">Adı Soyadı <span class="text-danger">*</span></label></div>

				<div class="col-md-4">
					<input class="form-control" type="text" placeholder="Adı" name="gadi"  value="<?= $aladi?>" >
				</div>
				<div class="col-md-4">
					<input class="form-control" type="text" placeholder="Soyadı" name="gsoyadi"  value="<?= $alsoyadi?>" >
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6">
					<label class="col-form-label">Firma</label>


					<select name="gkurum"> <!-- s elect name si ile çağrılır optıonslar ise value ile aktalırılır.-->
						<?php 
						$listcomp= mysqli_query(connect(),"SELECT kid,k_adi from kurum");
						while($asssocWhile=mysqli_fetch_assoc($listcomp)){


							?> 

							<option value="<?php echo $asssocWhile['kid']; ?>"><?php echo  $asssocWhile['k_adi']; ?></option>


						<?php }?> 
					</select>
					<hr style="border-color: blue;">
				</div>


			</div>
			<h3> İletişim Detayları</h3>

			<div class="form-group row">
				<div class="col-sm-6">
					<label class="col-form-label">Telefon</label>
					<input type="text" class="form-control" name="gtel" placeholder="telefon"  value="<?= $altel?>" >
					<hr>
				</div>

			</div>

			<h3>Adres Bilgisi</h3>
			<div class="form-group row">
				<div class="col-sm-6">
					<label class="col-form-label">Adres</label>
					
					<input type="text" class="form-control" name="adres" placeholder="gadres"  value="<?= $aladres?>" >
					<hr>
				</div>

			</div>
			<div class="form-group row">
				<div class="col-sm-6">
					 <div class="profile-img">
                    <img  src="image/<?php echo $alname ?>"  alt="" width="100" height="130" />

                </div>
				</div>

			</div>


			<h3>Fotograf Seçin</h3>
			<div class="form-group row">
				<div class="col-sm-6">

					<label class="col-form-label">Resimler jpg, png formatında olmadlıdır.</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<hr>
				</div>
			</div>


			

			<input type="text" name="gid" value="<?= $alid?>" style="display: none;">

			<div class="text-center py-3">

				<button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Güncelleme Onayla</button>&nbsp;&nbsp;
				<button type="button" class="btn btn-secondary btn-rounded">İptal</button>
			</div>
		</form>


	</div>


