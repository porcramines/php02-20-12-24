<?php

$archivo ="datos.txt";
touch($archivo);
print 'El momento de modificación de ' . $archivo. ' ha sido cambiada a la hora actual';
?>
