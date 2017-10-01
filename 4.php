<?php
	function enter(){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		return trim($line);
	}
	$check = false;
	while(!$check){
		$n = enter();
		if($n <= 1000000000){
			$check = true;
		}
	}
	$groups = array();
	for ($i=0; $i < $n; $i++) { 
		$groups = array();
	}