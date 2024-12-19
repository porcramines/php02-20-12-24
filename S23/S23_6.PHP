<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Expresiones regulares</title>
</head>
<body>
	
<?php
$cadena1="12345689";
$cadena2="abcdefghi12";
$exp="/^[[:digit:]]+$/";
if (preg_match($exp,$cadena1))
 {
	print "<p> la cadena $cadena1 solo son numeros </p>";	

}
else
{
	print "<p> la cadena $cadena1 no todos son numeros </p>";
}
if (preg_match($exp,$cadena2))
 {
	print "<p> la cadena $cadena2 solo son numeros </p>";	

}
else
{
	print "<p> la cadena $cadena2 no todos son numeros </p>";
}

?>


</body>
</html>
