<?php
$monto=5000;
$tasaIGV=0.18;
$montoIGV=$monto*$tasaIGV;
$total=$monto+$montoIGV;

$sMonto=number_format($monto,2);
$sMontoIGV=number_format($montoIGV,2);
$sTotal=number_format($total,2);

Print "<p>Monto:S/.$sMonto</p>";
Print "<p>IGV:S/.$sMontoIGV</p>";
Print "<p>-----------------</p>";
Print "<p>Total:S/.$sTotal</p>";


?>