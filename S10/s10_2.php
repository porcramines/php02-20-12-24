

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

$aDatos=explode("|", $datos);
$mail=$aDatos[0];
$nombre=$aDatos[1];
$apellido=$aDatos[2];
$fecha=$aDatos[3];	
print "hola, $nombre $apellido, te enviaremos un mensaje <br>";
print "el envio sera antes de la fecha $fecha";
}
?>

</body>
</html>
