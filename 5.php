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
	for ($i=1; $i < $n; $i++) { 
		for ($j=2; $j < $i; $j++) { 
			if(($i % $j) == 0){
				echo $i;
			}
		}
		echo "\n";
	}