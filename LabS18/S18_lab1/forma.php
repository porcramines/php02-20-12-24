<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Forma</title>
<?php
if(isset($_FILES['foto'])){
	if(is_uploaded_file($_FILES['foto']['tmp_name'])){
		$foto=time()."jpg";
		copy($_FILES['foto']['tmp_name'],"dioses/$foto");
		header("location:tabla.php");
	}
}

?>
</head>
<body>
	<h2>subir una imagen</h2>
	<form action="forma.php" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>imagen</td>
		<td><input type="file" name="foto" id="foto"/></td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="enviar" id="enviar" value="enviar"/> </td>
	</tr>

</table>
</form>
</body>
</html>