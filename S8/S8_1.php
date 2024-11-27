<?php
$archivo="datos.txt";
if(touch($archivo))
{
	$archivoID=fopen($archivo,"r");
	while (!feof($archivoID))
	{
	
		$linea=fgets($archivoID,1024);
		print "<p>".$linea."</p>";

	}
	fclose($archivoID);
}

?>
