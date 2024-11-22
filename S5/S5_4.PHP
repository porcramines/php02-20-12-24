<?php //Ejemplo de fopen, para abrir archivos. txt en el navegador web

$file = fopen("datos/datos.txt", "r");

while(!feof($file)) {

echo fgets($file). "<br />";

}

fclose($file);

?>