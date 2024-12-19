<?PHP
$direccion="Calle Cuellar \nCalle Augusta";
echo preg_match_all("/^calle/im",$direccion);

?>