<?php
	$m = 0;
	for ($i=1; $i <= 5; $i++) { 
		if($m<$_POST[$i]){
			$m = $_POST[$i];
		}
	}
	echo "O maior número é: ".$m;
?>