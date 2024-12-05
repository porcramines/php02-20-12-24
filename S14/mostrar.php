<?php
require "conexion.php";
$sql="SELECT * FROM empresa";
print $sql."<br>";
$result =mysqli_query($conexion, $sql) or die ("Error al actualizar los datos");
echo "<Table border ='1'>";
while ($columna=mysqli_fetch_array($result))
 {
	echo "<tr>";
	$id=$columna['id_emp'];
	echo "<td>$id";
	$nombre=$columna['nom_emp'];
	echo "</td><td>$nombre";
	$web=$columna['web_emp'];
	echo "</td><td>$web";
	$telefono=$columna['tel_emp'];
	echo "</td><td>$telefono";
    $sector=$columna['sec_emp'];
	echo "</td><td>$sector";
	$desc=$columna['des_emp'];
	echo "</td><td>$desc</td></tr>";

}
echo "</tables>";

?>