<?php
$str1 = "hola";
$str2 = "hola mundo!";

echo sprintf("[%s]",$str1)."<br>";
echo sprintf("[%8s]",$str1)."<br>";
echo sprintf("[%-08s]",$str1)."<br>";
echo sprintf("[%08s]",$str1)."<br>";
echo sprintf("[%'*8s]",$str1)."<br>";
echo sprintf("[%0.11s]",$str2)."<br>";
?>