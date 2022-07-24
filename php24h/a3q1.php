<!DOCTYPE html>
<html>
<head>
	<title>Funções q1</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post">
		<label>1º Valor: </label><input type="text" name="n1" required></br>
		<label>2º Valor: </label><input type="text" name="n2" required></br>
		<label>3º Valor: </label><input type="text" name="n3" required></br>
		<input type="submit" value="envie">
	</form>
</body>
</html>
<?php
  	$a = $_POST['n1'];
  	$b = $_POST['n2'];
  	$c = $_POST['n3'];
  	function soma($x,$y,$z){
  		echo "A soma dos argumentos é: ".($x+$y+$z);
  	}
  	soma($a,$b,$c);
		  	
?>