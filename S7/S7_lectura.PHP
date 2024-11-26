<?php //LECTURA DE FICHEROS

$file = fopen("archivo.txt", "r");

while(!feof($file)) {

echo fgets($file). "<br />";

}

fclose($file);

?>