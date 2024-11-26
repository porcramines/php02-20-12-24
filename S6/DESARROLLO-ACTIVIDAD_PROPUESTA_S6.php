<!--
hacer un programa en PHP que permita revisar archivos que correspondan a los pagos de un grupo de estudiantes y debe generar un reporte de los mismos archivos
 -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>

<style type="text/css">
	
	table, tr, td {
  border: 1px solid black;
}
</style>


<body>
<?php
	$archivo=".";
	$dir=".";
	$dirID=opendir($dir);

?>
<h1>REPORTE DE PAGO DE LOS ESTUDIANTES-2024</h1>
<table>
	<tr>
		<td>Estudiantes</td>
		<td>Realizo el Pago</td>
	</tr>

	<?php
		while ($nombre = readdir($dirID)) 
		{
			print "<tr>";
				print"<td>";
					print $nombre;
				print"</td>";
				print"<td>";
			 		print "existe";
			 	print"</td>";
			print "</tr>";

		}
	?>	
	<?php	 	
	closedir($dirID);
	?>
</table>


</body>
</html>