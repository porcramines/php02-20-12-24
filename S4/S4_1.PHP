<?php
$mail="campus.dayperperu@dayperperu.com";
$arroba=strpos($mail, "@");
$punto=strpos($mail, ".",$arroba);
$lon=$punto-$arroba-1;
$servicio=substr($mail,$arroba+1,$lon);
print"<p> la arroba se encuentra en la posicion:$arroba</p>";
print"<p> El punto se encuentra en la posicion:$punto</p>";
print"<p> la longitud es:$lon</p>";
print"<p> el servicio es:$servicio</p>";

?>
