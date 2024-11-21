<?php
$monto=5000;
$tasaIGV=0.18;
$montoIGV=$monto*$tasaIGV;
$total=$monto+$montoIGV;
$sTotal=sprintf("<p>Monto: S/.%6.2f IGV: S/.%6.2f Total S/.%6.2f </p>",$monto,$montoIGV,$total);
print $sTotal;


?>