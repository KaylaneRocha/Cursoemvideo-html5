<?php

class Frequencia{
	function consulta_dia($turma,$dia,$aula){
		session_start();
		$pdo = new PDO("mysql:host=localhost;dbname=sistema_frequencia","root","");
		$sql = "select * FROM aluno inner join turma inner join horarios_registrados inner join horario where dia = 'segunda' and turma = 'enfermagem' and ano = '1' and hora = '07:30' and turma.id = horarios_registrados.id_turma and aluno.id_turma = turma.id";
		$consulta = $pdo->prepare($sql);
		$consulta->BindValue(':dia',$dia);
		$consulta->BindValue(':aula',$aula);
		$consulta->BindValue(':turma',$turma);
		$consulta->execute();

		echo	'<!DOCTYPE html>';
		echo'<html lang="en">';
		echo'<head>';
		echo '<meta charset="utf-8">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		echo '<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">';
		echo '<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>';
		echo   ' <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>';
		echo ' <link rel="stylesheet" type="text/css" href="../css/tabela1.css">';
		echo '</head>';
		echo'<body>';
		echo'<div class="container">';
		echo' <div class="row">';
		echo   '<div class="panel panel-primary filterable">';
		echo   ' <div class="panel-heading">';
		echo      '  <h3 class="panel-title">Alunos</h3>';	
		echo      '<div class="pull-right">';
		echo     ' </div>';
		echo   ' </div>';
		echo '<table class="table">';
		echo  ' <thead>';
		echo      '<tr class="filters">';
		echo       ' <th><p>Número</p></th>';
		echo        '<th><p>Matrícula</p></th>';
		echo       ' <th><p>Nome</p></th>';
		echo      ' <th><p>Falta</p></th>';
		echo   '</tr>';
		echo  ' </thead>';
		foreach ($consulta as $key) {
			echo'<tbody>';
			echo'<tr>';
			echo'<td>'.utf8_encode($key['numero_chamada']).'</td>';
			echo'<td>'.utf8_encode($key['matricula']).'</td>';
			echo'<td>'.utf8_encode($key['nome']).'</td>';
			echo'<td>  <input type="submit" name="btn" value="inserir falta" class="btn btn-primary"></td>';
			echo'</tr>';
			echo'</tr>';
			echo'</tbody>';
		}
		echo'</table>';
		echo'</div>';
		echo	'</div>';
		echo	'</div>';
		echo'</body>';
		echo	'</html>';
	}

	function consulta_prof($turma,$dia,$aula){
		$pdo = new PDO("mysql:host=localhost;dbname=sistema_frequencia","root","");
		$sql = "select * from professor inner join horarios_registrados inner join disciplina inner join horario inner join turma where dia = 'segunda' and turma = 'enfermagem' and ano = '1' and hora = '07:30' and disciplina.id = horarios_registrados.id_disciplina and professor.id = horarios_registrados.id_disciplina and professor.id = horario.id";
		$consulta = $pdo->prepare($sql);
		$consulta->BindValue(':dia',$dia);
		$consulta->BindValue(':aula',$aula);
		$consulta->BindValue(':turma',$turma);
		$consulta->execute();

		foreach ($consulta as $key) {
			echo	'<!DOCTYPE html>';
			echo'<html lang="en">';
			echo'<head>';
			echo '<meta charset="utf-8">';
			echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
			echo '<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">';
			echo '<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>';
			echo   ' <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>';
			echo ' <link rel="stylesheet" type="text/css" href="../css/tabela1.css">';
			echo '</head>';
			echo'<body>';
			echo'<div class="container">';
			echo' <div class="row">';
			echo   '<div class="panel panel-primary filterable">';
			echo   ' <div class="panel-heading">';
			echo      '  <h3 class="panel-title">Informações da aula</h3>';
			echo      '<div class="pull-right">';
			echo     ' </div>';
			echo   ' </div>';
			echo '<table class="table">';
			echo  ' <thead>';
			echo      '<tr class="filters">';
			echo       ' <th><p>professor:</p></th>';
			echo        '<th><p>'.utf8_encode($key['nome_p']).'</p></th>';
			echo       ' <th><p>disciplina:</p></th>';
			echo      ' <th><p>'.utf8_encode($key['disciplina']).'</p></th>';
			echo   '</tr>';
			echo  ' </thead>';
			echo'<tbody>';
			echo'</tr>';
			echo'</tbody>';
			echo'</table>';
			echo'</div>';
			echo	'</div>';
			echo	'</div>';
			echo'</body>';
			echo	'</html>';
		}
	}

// senha: 123
	function alterar_senha($senha_n,$senha_a){
		$pdo = new PDO("mysql:host=localhost;dbname=sistema_frequencia","root","");
		$sql = "UPDATE `secretaria` SET `senha`= :senha_n WHERE `senha` = :senha_a";
		$consulta = $pdo->prepare($sql);
		$consulta->BindValue(':senha_n',$senha_n);
		$consulta->BindValue(':senha_a',$senha_a);
		$consulta->execute();
	}



	

}
?>