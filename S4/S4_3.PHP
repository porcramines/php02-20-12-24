<?php
$salario="S/.25,500.00";
$cadena=str_replace("S/.","",$salario);
$cadena=str_replace(",","",$cadena);
$dSalario=(double)$cadena;
$total=$dSalario*1.12;
$sTotal=number_format($total,2);
print "<p> Tu Salario de $salario, mas tu bono del 12% es $sTotal felicidades</p>";


?>