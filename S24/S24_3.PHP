<?php
	$string ='123456789';
	print preg_match_all("/[^2468]/", $string, $matches);
	var_dump($matches);
?>