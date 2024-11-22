<?php
$archivo="datos.txt";
if(file_exists("datos/".$archivo))
{
	if(is_file("datos/".$archivo))
	{
		print "<p>'$archivo' es un archivo </p>";
	}
	if (is_dir("datos/".$archivo))
	{
		print "<p>'$archivo' es un directorio</p>";
	}

}
else
{
	print "<p>no existe el archivo '$archivo'</p>";
}
?>