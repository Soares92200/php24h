<?php
	$l = array(
		array("","","","","","","","","",""),
		array(0,0,0,0,0,0,0,0,0,0)
	);

	for ($i = 0; $i <= 9; $i++) {
    	$l[0]["$i"] = $_POST["n".$i+1];
	}
	$a = 0;
	for ($i = 0; $i <= 9; $i=$i+4) {
		if(($_POST[$i+1]+$_POST[$i+2]+$_POST[$i+3]+$_POST[$i+4])/4>=7){
			$l[1][$a] = ($_POST[$i+1]+$_POST[$i+2]+$_POST[$i+3]+$_POST[$i+4])/4;
		}  	
		$a++;
	}

?>