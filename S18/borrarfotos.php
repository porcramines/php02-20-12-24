<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Galeria de Fotos</title>
<?php

$foto=$_GET['foto'];

?>
<script type="text/javascript">
	
function regresaTabla()
{
  window.open("tablaFotos.php","_self");
  return false;
}
function borrarImagen(foto)
{
	window.open("borrarImagen.php?foto="+foto,"_self");
	return false;
}

</script>
</head>
<body>
<table border="1">
	<tr>
		<td>Imagen</td>
		<td>Nombre de la Imagen</td>
		<td>Ancho</td>
		<td>Alto</td>
		<td>Tamaño</td>
	</tr>
    <tr>

<?php
$archivo='fotos/'.$foto;
$info=getimagesize($archivo);
print "<td>";
print "<img src='fotos/$foto' width='200px'>";
print "</td>";
print "<td>";
print $foto;
print "</td>";
print "<td>";     	
print $info[0].'px';
print "</td>";
print "<td>";
print $info[1].'px';
print "</td>";
print "<td>";
print filesize($archivo);
print "</td>";
?>
<p>ADVERTENCIA : una vez borrado el archivo no podra recuperarse</p>
</table>
<form>
	<input type="button" value ="Borrar" onclick="borrarImagen('<?php print $foto;?>');">
	<input type="button" value="Regresar" onclick="regresaTabla()">
</form>

	
</body>
</html>