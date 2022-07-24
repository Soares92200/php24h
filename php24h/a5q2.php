<?php
	$l = array(
		array(0,0,0,0,0),
		array(0,0,0,0,0)
	);
	$a = 0;
	for ($i = 0; $i <= 9; $i=$i+2) {
    	$l[0][$a] = $_POST[$i+1];
    	$a++;
	}
	$a = 0;
	for ($i = 1; $i <= 9; $i=$i+2) {
    	$l[1][$a] = $_POST[$i+1];
    	$a++;
	}
	for ($i = 4; $i >= 0; $i--) {
		echo "Idade ".($i+1).": ".$l[0][$i]."</br>";
		echo "Altura ".($i+1).": ".$l[1][$i]."</br>";
	}

?>