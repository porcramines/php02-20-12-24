<?php
$cadena1="Bienvenidos al curso de PHP";
$cadena2="curso";
$resultado=strstr($cadena1,$cadena2);
if($resultado==false)
{
	print "no se encontro la cadena '$cadena2' en la fase '$cadena1'";

}
else
{
	print_r("si se encontro la cadena '$cadena2' en la frase '$cadena1'");
}

print "<p>el resultado es '$resultado'</p>";


?>