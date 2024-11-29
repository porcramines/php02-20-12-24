<?php

$archivo="datos.txt";
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$for_usuariocontrasena=$usuario.$contrasena;

$archivoID=fopen($archivo,"r");
	while (!feof($archivoID)) 
	{
		$bd_usuariocontraena=fgets($archivoID,1024);
		    
	}
	fclose($archivoID);

if(strtolower($for_usuariocontrasena)==strtolower($bd_usuariocontraena))
{
print "<p>Bienvenido al cruso de PHP:".strtoupper($usuario)."<p>";


}else
{
print "<p>Lo sentimos tu no eres binvenido<p>";	
}
?>