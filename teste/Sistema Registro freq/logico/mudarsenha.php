<?php

require_once 'Frequencia.class.php';

$x = new Frequencia();

if (isset($_POST['atualizar'])) {
	$senha_n = $_POST['senha_n'];
	$senha_a = $_POST['senha_a'];


	
$x->alterar_senha($senha_n,$senha_a);


}




?>