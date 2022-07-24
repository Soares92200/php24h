<!DOCTYPE html>
<html>
<head>
	<title>Arrays q4</title>
</head>
<body>
	<form method='post'>
		<label>Valor 1: </label><input type='number' name='1' required></br>
		<label>Valor 2: </label><input type='number' name='2' required></br>
		<label>Valor 3: </label><input type='number' name='3' required></br>
		<label>Valor 4: </label><input type='number' name='4' required></br>
		<label>Valor 5: </label><input type='number' name='5' required></br>
		<input type='submit' value='envie'>
	</form>
</body>
</html>
	
<?php
	$l = array(0,0,0,0,0);

	foreach ($l as $key => $value) {
		$l[$key] = $_POST[$key+1];
	}
	echo "Soma dos números: ".($l[0]+$l[1]+$l[2]+$l[3]+$l[4])."</br>";
	echo "Multiplicação dos números: ".($l[0]*$l[1]*$l[2]*$l[3]*$l[4])."</br>";

	foreach ($l as $key => $value) {
    	echo $value."</br>";
	}
?>