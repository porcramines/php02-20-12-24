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
	if ($_SESSION['acceso']!="1")
	{
		header("Location:index.html");
		exit;
	}
	echo "bienvenido al campus de dayper peru<br>";
	echo "<a href='salida.php'>salir del campus</a>";
	

	?>
</body>
</html>