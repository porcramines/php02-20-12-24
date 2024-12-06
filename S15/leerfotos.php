<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeria de fotos</title>
</head>
<body>
<?php
function validarfoto($foto)
{
	$bandera=false;
	if(preg_match("/[Jj][Pp][Gg]$/",$foto)) $bandera=true;
	if(preg_match("/[Gg][Ii][Ff]$/",$foto)) $bandera=true;
	if(preg_match("/[Pp][Nn][Gg]$/",$foto)) $bandera=true;
	return $bandera;
}
$dir=opendir("fotos");
$numRen=3;
if($dir)
{
	print '<table border="1"';
	print '<tr>';
	$i=0;
	while (false !=($foto=readdir($dir)))
	{
	if($foto !="."&&$foto!="."&&validarfoto($foto))
	{
		if($i==$numRen)
		{
			$i=0;
			print "</tr><tr>";
		}
		$i++;
		print "<td>";
		print "<img src ='fotos/$foto' width='200px'>";
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