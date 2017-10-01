<?php
	function enter(){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		return trim($line);
	}
	$check = false;
	while(!$check){
		$s = enter();
		$n = enter();
		if($s <= 2*1000000000 && $n <= 100000){
			$check = true;
		}
	}
	$r = 0;
	$ch = 0;
	for ($i=0; $i < $n; $i++) { 
		$thing = enter();
		if($thing <= $s && ($s-$r) >= $thing){
			$r = $r + $thing;
		}else{
			$ch = $ch + $thing;
		}
	}
	echo $r; echo "\n";
	echo $ch; echo "\n";