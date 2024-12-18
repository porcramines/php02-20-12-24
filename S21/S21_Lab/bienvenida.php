<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php

	session_start();
	if (isset($_SESSION['username'])==false)
	{
		header("Location: forma.php");
		exit;
	}

	echo "Bienvenido a la página privada...";
?>
</body>
</html>