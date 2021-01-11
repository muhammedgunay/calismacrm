<?php
include ('fonksiyon.php');
include "header.php";
//branch test

$gelenid=$_GET["id"];
echo $gelenid;



$sec =mysqli_query(connect(),"select * from sehir where s_id='$gelenid'");

while ($al=mysqli_fetch_assoc($sec)) {

	$alid=$al["s_id"];
	$alsehir=$al["sehir"];
	


}

?>
<div class="page-wrapper">


	<form method="get" action="sehirguncellemeonay.php" style="margin-left: 5px; margin-right: 5px; margin-top: 10px; ">


		<div class="form-group row">
			<div class="col-sm-4">
				<label class="col-form-label">Şehir Güncelle</label>
				<input type="text" class="form-control" name="gsehir" value="<?= $alsehir?>">
					<input type="text" name="gid" value="<?= $alid?>" style="display: none;">
				<button class="btn btn-primary" type="submit">güncelle</button>
			</div>


		</div>
	</form>	



</div>
