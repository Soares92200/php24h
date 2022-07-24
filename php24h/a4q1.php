<!DOCTYPE html>
<html>
<head>
	<title>Arrays q1</title>
</head>
<body>
	<form method='post'>
		<label>Preencha o vetor: </label><input type='number' name='1' required>
		<input type='number' name='2' required>
		<input type='number' name='3' required>
		<input type='number' name='4' required>
		<input type='number' name='5' required></br>
		<input type='submit' value='envie'>
	</form>
</body>
</html>
	
<?php
	$l = array(0,0,0,0,0);

	foreach ($l as $key => $value) {
		$l[$key] = $_POST[$key+1];
	}
	foreach ($l as $value) {
		echo "</br>".$value;
	}
?>