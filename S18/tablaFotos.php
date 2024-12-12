<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabla Fotos</title>
</head>
<body>
	<table border ="1">
		<tr>
			<td>Imagen</td>
			<td>Archivo</td>
			<td>Alto</td>
			<td>Ancho</td>
			<td>Tamaño (Bytes)</td>
			<td>Borrar</td>
			<td>Optimizar(%)</td>
			<td>Optimizar x ancho</td>
			<td>Filtros</td>
		</tr>
		<tr>
<?php
function validarfoto($foto)
{
	$bandera=false;
	if(preg_match("/[Jj][Pp][Gg]$/",$foto)) $bandera=true;
	if(preg_match("/[Gg][Ii][Ff]$/",$foto)) $bandera=true;
	if(preg_match("/[Pp][Nn][Gg]$/",$foto)) $bandera=true;
	return $bandera;
}

$dir = opendir("fotos");
$numRen = 1;
if($dir)
{
	$i = 0;
	
	while (false != ($foto = readdir($dir)))
	{
	if($foto != "." && $foto != ".." && validarfoto($foto))
	{
		if($i == $numRen)
		{
			$i = 0;
			print "</tr>";
			print "<tr>";
		}
		$i++;
		$archivo = 'fotos/'.$foto;
		$info = getimagesize($archivo);
		print "<td>";
		print "<img src ='fotos/$foto' width='60px' height ='60px'>";
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
		print "<td>";
		print "<a href='borrarfotos.php?foto=$foto'>Borrar</a>";
		print "</td>";
		print "<td>";
		print "<a href='optimizarFoto.php?foto=$foto'>Optimizar</a>";
		print "</td>";
		print "<td>";
		print "<a href='optimizarAncho.php?foto=$foto'>Optimizar</a>";
		print "</td>";

		print "<td>";
		print "<a href='filtrosImagen.php?foto=$foto'>Filtros</a>";
		print "</td>";

	}
	}
	print '</tr>';
	print '</table>';

}else
{
	print " error al abrir la carpeta 'fotos'";
}


?>


</body>
</html>