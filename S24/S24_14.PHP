<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
function validamail($mail)
{
	if(!preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$mail))
	{
		return false;
	}
	return true;
}
$mail="julver_alfaro@dayperperu.com";
if(validamail($mail))
{
	print "tu mail $mail es CORRECTO";
}
else
{
	print "tu mail $mail es INCORRECTO";
}
?>
</body>
</html>