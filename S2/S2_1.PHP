<?php
$monto=5000;
$tasaIGV=0.18;
$montoIGV=$monto*$tasaIGV;
$total=$monto+$montoIGV;
printf("<p>Monto: S/.%6.2f</p>",$monto);
printf("<p>IGV: S/.%6.2f</p>",$montoIGV);
print"<p>-----------------------</p>";
printf("<p>Total: S/.%6.2f</p>",$total);


?>