<?php
session_start();
if (!isset($_SESSION['seskullanici']) && !isset($_SESSION['sessifre'])) {
  @header("location:login.php");
}
include ('fonksiyon.php');
include "header.php";

$gelenid=$_GET["id"];


$sec =mysqli_query(connect(),"select * from kullanici where id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["id"];

	$alname=$al["name"];


}

?>



<div class="page-wrapper">
	<div class="container">


		<form method="post" action="resimguncelonay.php" enctype="multipart/form-data">
		

			<h3>Fotograf Seçin</h3>
			<div class="form-group row">
				<div class="col-sm-6">

					<label class="col-form-label">Resimler jpg, png formatında olmadlıdır.</label>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<hr style="border-color: blue;">
				</div>
			</div>


			

			<input type="text" name="gid" value="<?= $alid?>" style="display: none;">

			<div class="text-center py-3">

				<button type="submit" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Güncelleme Onayla</button>&nbsp;&nbsp;
				<a href="kullanici.php"><button type="button" class="btn btn-secondary btn-rounded">İptal</button></a>
			</div>
		</form>


	</div>