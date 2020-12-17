

<?php



function connect(){

$host="localhost";
$kadi="root";
$sifre="";
$vt="calisma";
$baglan=mysqli_connect($host,$kadi,$sifre,$vt);
$baglan->set_charset("utf8");

return $baglan;
}

function dd($dd){
	return var_dump($dd);
}
function d($dd){
	return print_r($dd);
}

function uyari($at){
echo "<script type='text/javascript'>  alert('$at');  </script>";
}


?>