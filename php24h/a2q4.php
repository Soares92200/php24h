<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	
	$m = ($n1+$n2)/2;

	if ($m>=7) {
		if($m==10){
			echo "Aprovado com Distinção!";
		}else{
			echo "Aprovado!";
		}
	}else{
		echo "Reprovado";
	}
	
?>