<?PHP
$texto="esto\nes\ntexto\nmultilinea\nlinea";
print "$texto";
print"<br>";
echo preg_match_all('/linea\Z/im',$texto);
echo "<br>";
echo preg_match_all('/linea$/im',$texto);
echo "<br>";
echo preg_match_all('/\Aes/im',$texto);
echo "<br>";
echo preg_match_all('/^es/im',$texto);
?>