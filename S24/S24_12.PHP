<?php
	$string1 ="Llegare pronto que voy volando";
	$string2 ="Llegare tarde que voy andando";
	echo preg_match_all("/and|vol|ando/i",$string1);
	echo preg_match_all("/and|vol|ando/i",$string2);
?>