<?php
$usuario="root";
$password="";
$servidor="localhost";
$basededatos="empresa";
$conexion=mysqli_connect($servidor,$usuario,$password) or die("no se ha podido conectar con el servidor");
$db=mysqli_select_db($conexion,$basededatos) or die ("no se ha podido conectar con la base de datos");

?>