<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeria de fotos</title>
</head>
<body>
	<table border ="1">
		<tr>
			<td>Imagen</td>
			<td>Nombre de la Imagen</td>
			<td>Anchos</td>
			<td>Altos</td>
			<td>Tamaño</td>
			<td>Borrar</td>
			<td>Optimizar</td>
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
			print "</tr><tr>";
		}
		$i++;
		$archivo = 'fotos/'.$foto;
		$info = getimagesize($archivo);
		print "<td>";
		print "<img src ='fotos/$foto' width='200px'>";
		print "</td>";
		print "<td>";
		print $foto;
		print "</td>";
		print "<td>";
		print $info[0]."px";
		print "</td>";
		print "<td>";
        print $info[1]."px";
		print "</td>";
		print "<td>";
		print filesize($archivo);
		print "</td>";
		print "<td>";
		print "<a href=borrarfotos.php?foto=$foto>Borrar</a>";
		print "</td>";
		print "<td>";
		print "Optimizar";
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