<?php
	$po = $_POST["p"];

	function multa($po){
		$p = $po-50;
		if($p>0){
			echo "Com o peso ".$po." kg , sua multa é de ".($p*4)." reais.";
		}else{
			echo "Com o peso ".$po." kg , você não paga multa.";
		}
	}
	multa($po);
?>