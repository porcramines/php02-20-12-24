<?php
date_default_timezone_set('America/Lima');

$t=time();
$fecha=date("d/m/Y",$t);
print "<p>$fecha </p>";
$hora=date("H:i:s",$t);
print "<p> la hora es: $hora </p>";

?>