<?php
$clave="juan perez";
$miclave="juan perez";
if(strtolower($clave)==strtolower($miclave))
{
print "<p>Bienvenido al cruso de PHP:".strtoupper($clave)."<p>";


}else
{
print "<p>Lo sentimos tu no eres binvenido<p>";	
}
?>