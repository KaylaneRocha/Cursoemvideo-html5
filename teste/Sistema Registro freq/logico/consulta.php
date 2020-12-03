<?php

require_once 'Frequencia.class.php';

$x = new Frequencia();

if (isset($_POST['gerar_turma'])) {
	$turma = $_POST['turma'];
	$dia = $_POST['dia'];
	$aula = $_POST['aula'];

	

if ($turma == 1 and $dia == 1 and $aula == 1) {
	$x->consulta_prof($turma,$dia,$aula);
	$x->consulta_dia($turma,$dia,$aula);
}else{
	  header('Location:../web/mensagem.php');
}


}

if (isset($_POST['sair'])) {
	session_destroy();
	header('Location:../web/index.html');
}




?>