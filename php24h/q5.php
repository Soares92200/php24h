<?php
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	
	echo "O produto do dobro do primeiro com metade do segundo: ".($n1*2)*($n2/2)."</br>"; // item a
	echo "A soma do triplo do primeiro com o terceiro: ".(($n1*3)+$n3)."</br>";// item b
	echo "O terceiro elevado ao cubo: ".$n3*3;// item c
?>