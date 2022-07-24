<!DOCTYPE html>
<html>
<head>
	<title>Funções q3</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post">
		<label>Taxa de imposto: </label><input type="text" name="n1" required></br>
		<label>Custo: </label><input type="text" name="n2" required></br>
		<input type="submit" value="envie">
	</form>
</body>
</html>
<?php
  	$taxaImposto = $_POST['n1'];
  	$custo = $_POST['n2'];

  	function somaImposto($x,$y){
  		echo "Taxa: $x </br>Custo: $y </br>Valor total: ".($x+$y);
  	}

	somaImposto($taxaImposto, $custo);  	
?>