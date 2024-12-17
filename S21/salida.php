<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	session_start();
	if ($_SESSION['acceso']=="1")
	{
		session_destroy();
		echo "has abandonado la pagina...<br>";
		echo "<a href='index.html'>volver al inicio </a>";
		
	}
	else
	{
		print "lo siento, pero la sesion ha expirado";	
	}

	

	?>
</body>
</html>