<?php
$archivo="datos.txt";
if(file_exists($archivo)){
	unlink($archivo);
	print "El archivo".$archivo."ha sido borrado con exito";

}
else{
	print "El archivo".$archivo." no existe";	
}

?>