<?php

$archivo="video.mp4";
if(file_exists("datos/".$archivo))
{
	if (is_file("datos/".$archivo))
	 {
		print "<p> '$archivo' es un archivo </p>";
		$tamanio=filesize("datos/".$archivo);
		$creado=filectime("datos/".$archivo);
		$modificado=filemtime("datos/".$archivo);
		if($tamanio<1024)$medida="b";
			if($tamanio>=1024 && $tamanio<1024000)
			{
				$medida="Kb";
				$tamanio/=1000;
			}
			if($tamanio>1024000)
			{
				$medida="Mb";
				$tamanio /=1000000;
			}	
		$sCreado=date("d/m/Y H:i:s",$creado);
		$sModificado=date("d/m/Y H:i:s",$modificado);
		print "<p>El archivo $archivo tiene tamaño de $tamanio $medida</p>";
		print "<p>Modificado el $sModificado</p>";
	 }
	 if (is_dir("datos/".$archivo))
	 {
	 	print"<p>'$archivo' es un directorio </p>";
	 }

}
else
	 {
	 	print "<p>No existe el archivo '$archivo'</p>";
	 }



?>
