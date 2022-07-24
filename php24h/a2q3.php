<?php
	$n1 = $_POST['n1'];
	
	if ($n1=="m") {
		echo "Masculino";
	} elseif($n1=="f") {
		echo "Feminino";
	}else{
		echo "Inválido";
	}
	
?>