<?php

$archivo=".";
if(file_exists("datos/".$archivo))
{
	if (is_file("datos/".$archivo))
	 {
		print "<p> '$archivo' es un archivo </p>";
	 }
	if (is_dir("datos/".$archivo))
	 {
		print "<p> '$archivo' es un directorio </p>";
	 
		$dir=".";
		$dirID=opendir($dir);
	 	while ($nombre = readdir($dirID)) 
	 	{
	 		print $nombre;
	 		if(is_dir($nombre)) print ">dir";
	 		if(is_file($nombre)) print ">archivo";    
	 		print "<br>";
	 	}
	 	closedir($dirID);
	 }
	}
	else
	{
		print "<p>No existe el archivo '$archivo'</p>";
	}


?>
