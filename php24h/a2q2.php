<?php
	$n1 = $_POST['n1'];
	
	if ($n1<0) {
		echo "É negativo.";
	} elseif($n1==0) {
		echo "É zero.";
	}else{
		echo "É positivo";
	}
?>