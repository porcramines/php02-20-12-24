<?php
$cadena1="Bienvenidos al curso de PHP";
$cadena2="e";
$pos=0;
$aPos=array();
print "<br>$pos<br>";
while($pos=strpos($cadena1,$cadena2,$pos))
{
	print "<br>$pos<br>";
	array_push($aPos, $pos);
	$pos++;
}
print "<p>El numero de ocurrencias de la cadena '$cadena2' en la cadena '$cadena1' es de :".count ($aPos);
$resultado=strstr($cadena1,$cadena2);
for ($i = 0; $i <count($aPos) ; $i++) 
{
	print "<p>En el Caracter num:".$aPos[$i]."<br>";	
}

?>