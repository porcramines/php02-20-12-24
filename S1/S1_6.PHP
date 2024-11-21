<?php
$fecha="29/11/2020";
$aFecha=explode("/",$fecha);
if(count($aFecha)!=3){
	header("location:error_froma.php");
	exit;
}
foreach ($aFecha as $valor) {
	$valor=intval($valor);
	if($valor<1){
		header("location:error_forma.php");
	}
}
if (checkdate($aFecha[1],$aFecha[0],$aFecha[2]) == false ){
	header("location:error_forma.php");
	exit;
}
print "<p> la fecha $fecha es correcta</p>";

?>