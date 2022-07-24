<!DOCTYPE html>
<html>
<head>
	<title>Arrays q2</title>
</head>
<body>
	<form method='post'>
		<label>Preencha o vetor: </label></br>
		<input type='number' name='1' required></br>
		<input type='number' name='2' required></br>
		<input type='number' name='3' required></br>
		<input type='number' name='4' required></br>
		<input type='number' name='5' required></br>
		<input type='number' name='6' required></br>
		<input type='number' name='7' required></br>
		<input type='number' name='8' required></br>
		<input type='number' name='9' required></br>
		<input type='number' name='10' required></br>
		<input type='submit' value='envie'>
	</form>
</body>
</html>
	
<?php
	$l = array(0,0,0,0,0,0,0,0,0,0);

	foreach ($l as $key => $value) {
		$l[$key] = $_POST[$key+1];
	}
	
	for ($i = 9; $i >= 0; $i = $i-1) {
    	echo $l[$i]."</br>";
	}
?>