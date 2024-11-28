<?php
$archivo="datos.txt";
if(touch($archivo))
{
	$linea1="hombres necios que acusais a la mujer \n";
	$linea2="sin ver que sois la ocasion de lo mismo \n";
	$linea3="si con ansias sin igual solicitais su desden \n";
	$linea4="porque quereis que obren bien si la incitais \n";
	$archivoID=fopen($archivo, "w");
	fwrite($archivoID, $linea1.$linea2.$linea3.$linea4);
	fclose($archivoID);
	//añadimos nuevo contenido
	$linea1="combatis su resistencia y luego \n";
	$linea2="decis que fue livinidad lo que hizo \n";
	$linea3="parece quiere el denuedo de vuestro \n";
	$linea4="al niño que pone el coco y luego le \n";
	$archivoID=fopen($archivo,"a");
	fwrite($archivoID, $linea1.$linea2.$linea3.$linea4);
	fclose($archivoID);
	//leemos el nuevo archivo
	$archivoID=fopen($archivo,"r");
	while (!feof($archivoID)) 
	{
		$linea=fgets($archivoID,1024);
		print "<p>".$linea."</p>";    
	}
	fclose($archivoID);
}

?>