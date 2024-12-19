<?php
	$string ='no coger vovales';
	echo preg_match_all("/[^aeiou]/",$string,$matches);
	echo preg_match_all("/[^ aeiou]/",$string,$matches);

	$string="NO coger MAYUSCULAS solo minisculas";
	echo preg_match_all("/[^A-Z]/",$string,$matches);
	
?>