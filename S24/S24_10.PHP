<?php
	$string1 ="hooola";
	$string2 ="hooooola";
	$string3 ="hoola";
	$string4 ="houiela";
	$string5 ="hla";
	echo preg_match("/ho{3}la/",$string1);
	echo preg_match("/ho{3,}la/",$string2);
	echo preg_match("/ho{2,3}la/",$string3);
    echo preg_match("/h[aeiou]{4}la/",$string4);
    echo preg_match("/ho{0}la/",$string5);

?>