<?php
	$a = $_POST["a"];

	function pesoIdeal($h){
		echo "Se você for homem, seu peso ideal é: ".((72.7*$h)-58)."</br>";
		echo "Se você for mulher, seu peso ideal é: ".((62.1*$h)-44.7);
	}
	pesoIdeal($a);
?>