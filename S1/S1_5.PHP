<?php
$cumple=mktime(0,0,0,11,29,97);
$hoy=time();
$edad=$hoy.$cumple;
print "<p> tu naciste un".date("l",$cumple)."</p>";
print "<p> has vivido aproximadamente".($edad/60/60/24)."dias </p>";
print "<p> tu edad es aproximadametne".($edad/60/60/24/365)."años </p>";


?>