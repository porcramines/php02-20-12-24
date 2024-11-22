<?php
$archivo ="datos.txt";
if (file_exists("datos/".$archivo))
{
	print "<p> si existe el archivo '$archivo' en datos </p>";
}
else
{
print "<p> no existe el archivo '$archivo' en datos </p>";	
}

?>