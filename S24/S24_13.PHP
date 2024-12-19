<?php
	$string ="Llegare pronto que voy volando";
preg_match_all("/and|vol|ando/i",$string,$matches);
	var_dump($matches);
?>