<?php
	$l = array(
		"alturas" => array(
			1.56,1.78,1.9,1.6,1.42,1.37,1.4,1.59,1.63,1.7,
			1.56,1.78,1.9,1.6,1.42,1.37,1.4,1.59,1.63,1.7,
			1.56,1.78,1.9,1.6,1.42,1.37,1.4,1.59,1.63,1.7
		),
		"idades" => array(
			15,18,11,10,9,20,8,5,3,13,
			15,18,11,10,9,20,8,5,3,13,
			15,18,11,10,9,20,8,5,3,13
		)
	);
	$mAlt = 0;
	for ($i = 0; $i <= 29; $i++) {
    	$mAlt = $mAlt+$l["alturas"][$i];
	}
	$mAlt = $mAlt/30;

	$cont = 0;
	for ($i = 0; $i <= 29; $i++) {
		if($l["idades"][$i]>=13 && $l["alturas"][$i]<=$mAlt){
			$cont++;
		}  		
	}
	echo $cont;
?>