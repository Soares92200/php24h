<?php
	echo "
	<form method='post'>
	<input type='number' name='n1'></br>
	<input type='number' name='n2'></br>
	<input type='number' name='n3'></br>
	<input type='number' name='n4'></br>
	<input type='submit' value='button'>
	</form>";
	
	try{
		if(isset($_POST['n1']) &&
		 isset($_POST['n2']) &&
		  isset($_POST['n3']) &&
		   isset($_POST['n4'])){
		   echo "Média = ".($_POST['n1']+
		   $_POST['n2']+
		   $_POST['n3']+
		   $_POST['n4'])/4;
		}else{
			echo htmlspecialchars("Sem números processados.");
		}
	}catch(Exception $e){
        	echo "erro";
    	}
?>
