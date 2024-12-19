<?php
	$string1 ="hla";
	$string2 ="hola";
	$string3 ="hooooooolala";
	echo preg_match_all("/ho+la/",$string1);
	echo preg_match_all("/ho+la/",$string2);
	echo preg_match_all("/ho+la/",$string3);
    

?>