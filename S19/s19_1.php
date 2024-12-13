<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversor de monedas</title>
</head>
<body>
<?php
	if (isset($_POST['estado']))
	{
		$estado=$_POST['estado'];
		if($estado=='1')
		{
			$tc=3.5;
			$cantidad=$_POST['cantidad'];
			$tipo =$_POST['tipo'];
			if($tipo=='1')
			{
				$r=$cantidad*$tc;
				$rc=number_format($r,2);
				print "la cantidad es $rc soles por $cantidad de dolares al 
				tipo de cambio $tc<br>"; 
			}
			if($tipo=='2')
			{
				$r=$cantidad/$tc;
				$rc=number_format($r,2);
				$tcd=1/$tc;
				print "la cantidad es $rc dolares por $cantidad de soles al tipo de cambio $tcd <br>";
			}
		}
		print "<br><br>";
	}
else
{
	?>
	<form method="post" action="s19_1.php">Introduzca la cantidad a convertir:<input type="text" name="cantidad" size="10"><br><br>
	seleccione el tipo de conversion:<br>
	<input type="radio" name="tipo" value="1" checked="checked">dolares<br> 	
	<input type="radio" name="tipo" value="2" >Soles<br> 
	<input type="submit"  value="convertir"> 
	<input type="hidden" name="estado" value="1"> 


	</form>
	<?php
}

?>
	
</body>
</html>