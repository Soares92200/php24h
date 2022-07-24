<!DOCTYPE html>
<html>
<head>
	<title>Av Qustão 9</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="avq9.php" method='post'>
		<label>Campo das horas: </label><input type='number' name='1' required></br>
		<label>Campo dos minutos: </label><input type='number' name='2' required></br>
		<input type='submit' value='envie'>
	</form>
</body>
</html>
<?php
	if(isset($_POST['1'])){
		$a = $_POST['1'];
		$b = $_POST['2'];
	}else{
		$a = 0;
		$b = 0;
	}

	function convert($h,$m){
		if($h>12){
			$h = $h-12;
			return "$h:$m P.M.";
		}else{
			return "$h:$m A.M.";
		}
	}
	function saida($h,$m){
		echo convert($h,$m);
	}
	saida($a,$b);
?>