<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forma</title>
<?php
if(@is_uploaded_file($_FILES['foto']['tmp_name'])){
	$foto = time().".jpg";
	copy($_FILES['foto']['tmp_name'], "imagenes/$foto");
	$anchoNuevo=200;
$archivo="imagenes/".$foto;
$imagen = imagecreatefromjpeg($archivo);
$info=getimagesize($archivo);
$ancho=$info[0];
$alto=$info[1];
$tipo=$info["mime"];
$nuevoAncho=$anchoNuevo;
$factor=$anchoNuevo/$ancho;
$nuevoAlto=$alto*$factor;
$lienzo=imagecreatetruecolor($nuevoAncho, $nuevoAlto);
imagecopyresampled($lienzo, $imagen, 0,0,0,0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
imagejpeg($lienzo, $archivo, 80);
}
?>
</head>
<body>
<form action="forma.php" method="post" enctype="multipart/form-data"> 
	Subr una imagen:
<input type="file" name="foto"/><br>
<input type="submit" value="Subir imagen"/>
</form> </body> </html>