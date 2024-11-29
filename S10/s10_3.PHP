<?php

$nombre="datos";
$valor="julveralfaro@admin.com|julver|alfaro|2020-06-2024";
$fecha=time()-1;
//$fecha=time()+(60*60*24);
setcookie($nombre,$valor,$fecha);

?>

<!DOCTYPE html>
<html>
<head>
	<title>galletas</title>
</head>
<body>

<?php


$datos=$_COOKIE["datos"];

if (isset($datos))
 {
	$datos=$_COOKIE["datos"];
	$aDatos=explode("|", $datos);
	$mail=$aDatos[0];
	$nombre=$aDatos[1];
	$apellido=$aDatos[2];
	$fecha=$aDatos[3];	
	print "hola, $nombre $apellido, te enviaremos un mensaje <br>";
	print "el envio sera antes de la fecha $fecha";
}
else
{
	print "lo sentimos no existe cookie almacenada.";
}
?>

</body>
</html>
