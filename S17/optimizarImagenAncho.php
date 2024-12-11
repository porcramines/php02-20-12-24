<?php

if (isset($_GET['foto'])==false)
{
	header("location:tablaFotos.php");	
	exit;
}
$foto = $_GET["foto"];
$anchoNuevo = $_GET["ancho"];
$nombre = $_GET["nombre"];
$archivo = "fotos/".$foto;
$info = getimagesize($archivo);
$ancho = $info[0];
$alto = $info[1];
$tipo = $info["mime"];
$nuevoAncho = $anchoNuevo;
$factor = $anchoNuevo/$ancho;
$nuevoAlto = $alto*$factor;
switch($tipo)
{
	case "image/jpg":
	case "image/jpeg":
	$imagen = imagecreatefromjpeg($archivo);
	break;
	case "image/png":
	$imagen=imagecreatefrompng($archivo);
	break;
	case "image/gif":
	$imagen=imagecreatefromgif($archivo);
	break;


}
$lienzo = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
imagecopyresampled($lienzo, $imagen,0,0,0,0,$nuevoAncho, $nuevoAlto, $ancho, $alto);
imagejpeg($lienzo,"fotos/".$nombre, 80);
header("location:tablaFotos.php");

?>