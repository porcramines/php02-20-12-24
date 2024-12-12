<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foto</title>
</head>
<body>
<?php
if (is_uploaded_file($_FILES['foto']['tmp_name']))
 {
$nombre="foto".date("YmdHis");
print $nombre;
copy($_FILES['foto']['tmp_name'],"fotos/$nombre.jpg");
}
else
{
	print "error en la carga de archivos";
}
?>
</body>
</html>