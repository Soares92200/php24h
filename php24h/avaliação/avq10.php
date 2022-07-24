<?php
	$l = array(
		array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"),
		array(0,0,0,0,0,0,0,0,0,0,0,0)
	);

	for ($i = 0; $i <= 11; $i++) {
    	$l[1]["$i"] = $_POST[$i+1];
	}
	$mA = 0;
	for ($i = 0; $i <= 11; $i++) {
    	$mA = $mA+$l[1][$i];
	}
	$mA = $mA/12;
	echo "Meses com temperatura acima da média($mA):</br>";
	for ($i=0; $i < 12; $i++) { 
		if($l[1]["$i"]>$mA){
			echo $l[0]["$i"]." com ".$l[1]["$i"]."ºC</br>";
		}
	}


?>