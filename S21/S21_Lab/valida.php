<?php
include("php/conn.php");
$usuario=$_POST["usuario"];
$clave = $_POST["clave"];
if($usuario !="" && $clave !=""){
	if($usuario=="" || $clave==""){
		print "Todos los datos con requeridos";
	} else {
	$q="SELECT * FROM usuarios WHERE username='".$usuario;
	$q.="' AND clave='".$clave."'";
	$r=mysqli_query($link, $q);
	$n=mysqli_num_rows($r);
	if($n==1){
		session_start();
		$_SESSION['username']=$usuario;
		header("Location: bienvenida.php");
	} else {
	print "Lo sentimos, no tiene acceso al sistema";

	}
} 
}else {

print "Acceso no permitido";
}

?>