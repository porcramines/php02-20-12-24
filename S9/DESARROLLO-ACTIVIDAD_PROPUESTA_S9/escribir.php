<?php
$archivo="datos.txt";
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

if(touch($archivo))
{
/*
	$linea1="hombres necios que acusais a la mujer \n";
	$linea2="sin ver que sois la ocasion de lo mismo \n";
	$linea3="si con ansias sin igual solicitais su desden \n";
	$linea4="porque quereis que obren bien si la incitais \n";
	
*/
	$archivoID=fopen($archivo, "w");
	fwrite($archivoID, $usuario.$contrasena);
	fclose($archivoID);
	$archivoID=fopen($archivo,"r");
	while (!feof($archivoID)) 
	{
		$linea=fgets($archivoID,1024);
		print "<p>".$linea."</p>";    
	}
	fclose($archivoID);
}

?>