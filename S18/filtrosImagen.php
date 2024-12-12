<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Filtros Imagen</title>
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
	var op = document.getElementById("op").value;
	var nombre = document.getElementById("nombre").value;
	window.open("filtrosFoto.php?foto="+foto+"&op="+op+"&nombre="+nombre,"_self");
	return false;
}

</script>
</head>

<table border="1">
	<tr>
		<td>Imagen</td>
		<td>Archivo</td>
		<td>Alto (px)</td>
		<td>Ancho (px)</td>
		<td>Tamaño (Bytes)</td>
	</tr>
    <tr>
<body>
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
print "</td></tr>";
print '</table>';
?>
<p>Selecciona una opcion para añadir un filtro a la foto</p>
</table>
<form>
<select id="op">
	<option value="negativo">Negativo</option>
  <option value="grises">Escala de Grises</option>
  <option value="brillo">Brillantes</option>
  <option value="contraste">Contraste</option>
</select>
<label for="nombre">Nombre de la nueva imagen:</label><br/><input type="text" id="nombre" name="nombre" /><br /><br />
	<input type="button" value ="Optimizar" onclick="optimizarImagen('<?php print $foto;?>');">
	<input type="button" value="Regresar" onclick="regresaTabla()">
</form>

	
</body>
</html>