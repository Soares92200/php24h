<?php

	if($_POST["1"]>$_POST["2"]){
		if($_POST["1"]>$_POST["3"]){
			$maior = $_POST["1"];
			if($_POST["2"]>$_POST["3"]){
				$medio = $_POST["2"];
				$menor = $_POST["3"];
			}else{
				$medio = $_POST["3"];
				$menor = $_POST["2"];
			}
		}else{
			$medio = $_POST['1'];
			if($_POST["2"]>$_POST["3"]){
				$maior = $_POST["2"];
				$menor = $_POST["3"];
			}else{
				$maior = $_POST["3"];
				$menor = $_POST["2"];
			}
		}
	}else{
		if($_POST["1"]>$_POST["3"]){
			$medio = $_POST["1"];
			if($_POST["2"]>$_POST["3"]){
				$maior = $_POST["2"];
				$menor = $_POST["3"];
			}else{
				$maior = $_POST["3"];
				$menor = $_POST["2"];
			}
		}else{
			$menor = $_POST['1'];
			if($_POST["2"]>$_POST["3"]){
				$maior = $_POST["2"];
				$medio = $_POST["3"];
			}else{
				$maior = $_POST["3"];
				$medio = $_POST["2"];
			}
		}
	}
	echo $maior."</br>".$medio."</br>".$menor;
	
?>