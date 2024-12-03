<?php
require "conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$web = $_POST['web'];
$telefono = $_POST['telefono'];
$sector = $_POST['sector'];
$desc = $_POST['desc'];

$sql = "INSERT INTO empresa(id_emp,nom_emp,web_emp,tel_emp,sec_emp, des_emp)
VALUES('$id','$nombre','$web','$telefono','$sector','$desc')";

print $sql."<br>";

$result = mysqli_query($conexion,$sql) or die("error al insertar los datos");
if($result)
{
	print "se guardo el registro correctamente";

}
else
{
	print "hubo un problema al registrar los datos";
}

?>