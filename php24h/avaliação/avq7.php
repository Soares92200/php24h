<?php
	if($_POST['1']>$_POST['2']){
		$ma = $_POST['1'];
		$me = $_POST['2'];
	}else{
		$ma = $_POST['2'];
		$me = $_POST['1'];
	}
	$cont = $me;
	for ($i=$me; $i < $ma; $i++) { 
		$cont++;
		echo $cont."</br>";
	}

?>