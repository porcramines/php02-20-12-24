<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
if (strcmp($usuario, "dayper")==0 && strcmp($clave,"2020")==0) 
{
	session_start();
	$_SESSION['acceso']="1";
	print "Bienvenido $usuario<br><br>";
}
echo "<a href='privado.php'>Galeria de fotos del campus dayper</a>";
 ?>