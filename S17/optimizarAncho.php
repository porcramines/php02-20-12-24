<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Optimizar foto</title>

<?php
	$foto=$_GET['foto'];

?>

<script type="text/javascript">
	
function regresaTabla()
{
  window.open("tablaFotos.php","_self");
  return false;
}
function optimizarImagen(foto)
{
	var ancho = document.getElementById("ancho").value;
	var nombre = document.getElementById("nombre").value;

	window.open("optimizarImagenAncho.php?foto="+foto+"&ancho="+ancho+"&nombre="+nombre,'_self');
	return false;
}

</script>




</head>
<body>
	

<table border="1">
	<tr>
		<th>Imagen</th>
		<th>Archivo</th>
		<th>Ancho</th>
		<th>Alto</th>
		<th>Tamaño</th>
	</tr>
    <tr>

<?php
	$archivo='fotos/'.$foto;
	$info=getimagesize($archivo);
	print "<td>";
	print "<img src='fotos/$foto' width='120px' height='120px'>";
	print "</td>";
	print "<td>";
	print $foto;
	print "</td>";
	print "<td>";     	
	print $info[0];
	print "</td>";
	print "<td>";
	print $info[1];
	print "</td>";
	print "<td>";
	print filesize($archivo);
	print "</td>";
	print '</table>';
?>

<p>Escriba el nuevo ancho de la foto para mantenerlo en forma proporcional</p>

<form>

<label for="ancho">nuevo ancho de la imagen:</label><br /><input type="text" id="ancho" name="ancho" /><br /><br />
<br /><br />
<label for="nombre">nombre de la nueva imagen:</label><br /><input type="text" id="nombre" name="nombre" /><br /><br />

<input type="button" value ="Optimizar" onclick="optimizarImagen('<?php print $foto;?>');"/>
<input type="button" value ="Regresar" onclick="regresaTabla()"/>
</form>




</body>
</html>