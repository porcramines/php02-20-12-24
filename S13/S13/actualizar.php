<?php
require "conexion.php";
$id="123456";
$sql="UPDATE empresa SET sec_emp='Telecomunicaciones' WHERE id_emp='$id'";
print $sql."<br>";
$result=mysqli_query($conexion,$sql) or die ("error al eliminar los datos");
if ($result) 
{

print "se actualizo el registro";

}
else
{
	print "hubo un problema al eliminar los datos";
}

?>