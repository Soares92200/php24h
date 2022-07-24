<?php
	function dat($i,$a){
		if ($i == 1) {
		    echo "Janeiro de ";
		} elseif ($i == 2) {
		    echo "Fevereiro de ";
		} elseif ($i == 3) {
		    echo "Março de ";
		} elseif ($i == 4) {
		    echo "Abril de ";
		} elseif ($i == 5) {
		    echo "Maio de ";
		} elseif ($i == 6) {
		    echo "Junho de ";
		} elseif ($i == 7) {
		    echo "Julho de ";
		} elseif ($i == 8) {
		    echo "Agosto de ";
		} elseif ($i == 9) {
		    echo "Setembro de ";
		} elseif ($i == 10) {
		    echo "Outubro de ";
		} elseif ($i == 11) {
		    echo "Novembro de ";
		} elseif ($i == 12) {
		    echo "Dezembro de ";
		}else{
	    	echo "Inválido";
		}

		if ($a == 2014) {
			echo "Dois mil e catorze";
		} elseif($a == 2015) {
			echo "Dois mil e quinze";
		} elseif($a == 2016) {
			echo "Dois mil e dezesseis";
		} elseif($a == 2017) {
			echo "Dois mil e dezessete";
		} elseif($a == 2018) {
			echo "Dois mil e dezoito";
		} elseif($a == 2019) {
			echo "Dois mil e dezenove";
		} elseif($a == 2020) {
			echo "Dois mil e vinte";
		}
	}

	dat($_POST['2'], $_POST['3']);
?>