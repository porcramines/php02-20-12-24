<?PHP
$direccion="Calle Cuellar";
if(preg_match("/^calle/i", $direccion))
{
	echo "es una calle";
}
else
{
	echo "no es una calle";

}

?>