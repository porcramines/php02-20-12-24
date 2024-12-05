<?php
require "conexion.php";
$id = "123456789";
$sql = "DELETE FROM empresa WHERE id_emp = '$id'";
print $sql."<br>";
$result = mysqli_query($conexion, $sql) or die("error al eliminar los datos");

if ($result) 
{

print "se elimino el registro";

}
else
{
print "hubo un problema al eliminar los datos";
}

?>