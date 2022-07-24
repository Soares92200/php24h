<?php
	$dadosDoUsuario = array("Nome" => "Mano", "Telefone" => "8754891589", "idade" => 21);
	$dadosDosUsuarios = array(
		array("Nome" => "Emanuel", "Telefone" => "1234567890", "idade" => 18),
		array("Nome" => "Soares", "Telefone" => "0987654321", "idade" => 19),
		array("Nome" => "Santos", "Telefone" => "12345098765", "idade" => 17)
	);
	var_dump($dadosDosUsuarios);
	foreach ($dadosDosUsuarios as $key => $value) {
		echo "</br>".$dadosDosUsuarios[$key]["Nome"];
	}
?>