<?php
	$a = $_POST['a'];
	if($a=="M"){
		echo "Bom dia!";
	}elseif ($a=="V") {
		echo "Boa tarde!";
	}elseif ($a=="N") {
		echo "Boa noite!";
	}else{
		echo "Inválido";
	}
?>