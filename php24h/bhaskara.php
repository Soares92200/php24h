<!DOCTYPE html>
<html>
<head>
	<title>Bhaskara</title>
	<meta charset="UTF-8">
	<style type="text/css">
		.c {
	        width: 100vw;
	        height: 100vh;
	        background: #999;
	        display: flex;
	        flex-direction: row;
	        justify-content: center;
	        align-items: center
	    }
	    .d {
	        width: 300px;
	        height: 300px;
	        background: #aaa;
	        box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
	    }
	    input[type='submit']{
			display: inline;
			margin-top: 10px;
			cursor: pointer;
			height: 40px;
			width: 80px;
		}
	    body {
	       margin: 0px;
		}
	</style>
</head>
<body>
	<div class="c">
		<div class="d">
			<form method="post">
				<label>Valor de A: </label><input type="text" name="n1" required></br>
				<label>Valor de B: </label><input type="text" name="n2" required></br>
				<label>Valor de C: </label><input type="text" name="n3" required></br>
				<input type="submit" value="envie">
			</form>
<?php
	try{
		if(isset($_POST['n1']) &&
		 isset($_POST['n2']) &&
		  isset($_POST['n3'])){
		  	$a = $_POST['n1'];
		  	$b = $_POST['n2'];
		  	$c = $_POST['n3'];
		  	$d = $b*$b-4*$a*$c;
		  	echo "Números passados:</br>A = ".$a."</br>B = ".$b."</br>C = ".$c."</br>";
		  	echo $a."x²+".$b."x+".$c."=0</br>";
		  	if($d < 0){
				echo "Delta igual a ".$d."</br>Não tem raiz real";
			}elseif($d == 0){
				$x1 = ((-1)*$b)/2*$a;
				echo "Delta nulo, x = ".$x1;
			}else{
				$x1 = ((-1)*$b+sqrt($d))/2*$a;
				$x2 = ((-1)*$b-sqrt($d))/2*$a;
				echo "Delta igual a ".$d."</br>Raízes: x1 = ".$x1.", x2 = ".$x2;
			}
			echo "</div>
			</div>
			</body>
			</html>";
		}else{
			echo htmlspecialchars("Sem números processados.");
		}
	}catch(Exception $e){
        	echo "erro";
    	}
?>