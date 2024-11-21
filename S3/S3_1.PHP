<?php
$cadena1="Bienvenidos al curso de PHP";
$cadena2="";
for ($i = 0; $i < strlen($cadena1); ++$i) 
{
$cadena2=$cadena1[$i].$cadena2;	
}
print "<p>$cadena1</p>";
print "<p>$cadena2</p>";
print "<p>la longitud de la cadena es".strlen($cadena1)."</p>";


?>