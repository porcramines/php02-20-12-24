<?php
$t=time();
$diasemana=date("l",$t);
$diames=date("j",$t);
$mes=date("F",$t);
$anio=date("Y",$t);
$hora=date("H",$t);
$ampm=date("A",$t);
$min=date("i",$t);
$m="hoy es $diasemana del mes $mes a $diames del año $anio y
son las $hora y $min minutos";
print "<p>$m </p>";

?>