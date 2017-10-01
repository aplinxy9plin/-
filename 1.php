<?php
	function enter(){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		return trim($line);
	}
	$check = false;
	while(!$check){
		$k = enter();		
		$p = enter();
		$s = enter();
		if($k <= 10000000 && $s <= 10000000 && $p <= 100){
			$check = true;
		}else{
			echo "Ввод с ошибкой. k должна не превышать 10^7, s не превышать 10^7, p не превышать 100\n";
		}
	}
	echo ($s%($p/10*$k+$k)); echo "\n";