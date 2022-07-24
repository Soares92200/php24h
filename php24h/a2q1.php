<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	
	if ($n1<$n2) {
		echo "O maior é ".$n2;
	} elseif($n1==$n2) {
		echo "São iguais.";
	}else{
		echo "O maior é ".$n1;
	}
	
?>