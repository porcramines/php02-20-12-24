<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ip</title>
</head>
<body>
	<?php
$ip=getenv('REMOTE_ADDR');

//$ip=$_SERVER['REMOTE_ADDR'];
print "tu ip es:$ip<br>";
$navegador=getenv('HTTP_USER_AGENT');

//$navegador=$_SERVER["HTTP_USER_AGENT"];
print "tu navegador y sistema operativo es: $navegador<br>";
	?>
</body>
</html>