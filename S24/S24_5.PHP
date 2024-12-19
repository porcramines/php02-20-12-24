<?php
	$string ='[]';
	echo preg_match("/\[\]/",$string,$matches);
	echo preg_match("/[\[\]]/",$string,$matches);
	
?>