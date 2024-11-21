<?php

$validationCustom02=$_POST['validationCustom02'];
$validationCustom01=$_POST['validationCustom01'];
$miclave="123456";
if(strtolower($validationCustom02)==strtolower($miclave))
{
print "<p>Bienvenido al cruso de PHP:".strtoupper($validationCustom01)."<p>";


}else
{
print "<p>Lo sentimos tu no eres binvenido<p>";	
}
?>