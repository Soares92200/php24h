<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method='post'>
		<label>Valor 1: </label><input type='text' name='1' required></br>
		<label>Valor 2: </label><input type='text' name='2' required></br>
		<label>Valor 3: </label><input type='text' name='3' required></br>
		<label>Valor 4: </label><input type='text' name='4' required></br>
		<label>Valor 5: </label><input type='text' name='5' required></br>
		<input type='submit' value='envie'>
	</form>
</body>
</html>
	
<?php
	$l = array("a","a", "a", "a", "a");
	var_dump($_POST);
	foreach ($l as $key => $value) {
		$l[$key] = $_POST[$key+1];
	}
	foreach ($l as $value) {
		echo "</br>".$value;
	}
	/*
	foreach ($l as $value) {
		echo $value."</br>";
	}
	*/
?>