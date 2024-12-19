<?PHP
$direccion="Calle Cuellar";
if(preg_match("/^Calle/", $direccion))
{
	echo "es una calle";
}
else
{
	echo "no es una calle";

}

?>