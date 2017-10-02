<?php
	function enter(){
		$handle = fopen ("php://stdin","r");
		$line = fgets($handle);
		return trim($line);
	}
	$dots = array();
	while(true){
		for ($i=0; $i < 6; $i++) { 
			$dots[$i] = enter();
			if(!is_int(abs($dots[$i])) || $dots[$i] > 100){
				echo "Введенные данные не верны! Повторите ввод.\n";
				$i = 0;
			}
		}
		if($dots[0] < $dots[2] && $dots[3] > $dots[1]){
			break;
		}else{
			echo "Введенные данные не верны! Повторите ввод.\n";
		}
	}
	// Север
	if($dots[5] > $dots[3]){
		if($dots[4] < $dots[0]){
			echo "NW\n";
		}
		if($dots[0] < $dots[4] && $dots[4] < $dots[2]){
			echo "N\n";
		}
		if($dots[4] > $dots[2]){
			echo "NE\n";
		}
	}
	// Юг
	if($dots[5] < $dots[1]){
		if($dots[4] < $dots[0]){
			echo "SW\n";
		}
		if($dots[0] < $dots[4] && $dots[4] < $dots[2]){
			echo "S\n";
		}
		if($dots[4] > $dots[2]){
			echo "SE\n";
		}
	}
	// Запад, восток
	if($dots[4] < $dots[0] && $dots[5] > $dots[1] && $dots[5] < $dots[3]){
		echo "W\n";
	}
	if($dots[4] > $dots[2] && $dots[5] > $dots[1] && $dots[5] < $dots[3]){
		echo "E\n";
	}
