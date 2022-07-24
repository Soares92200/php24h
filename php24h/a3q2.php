<!DOCTYPE html>
<html>
<head>
	<title>Funções q2</title>
	<meta charset="UTF-8">
</head>
<body>
	<form method="post">
		<label>Valor numérico: </label><input type="text" name="n1" required></br>
		<input type="submit" value="envie">
	</form>
</body>
</html>
<?php
  	$a = $_POST['n1'];

  	function noup($x){
  		if ($x<=0) {
  			echo "N";
  		}else{
  			echo "P";
  		}
  	}
  	
  	noup($a);	  	
?>