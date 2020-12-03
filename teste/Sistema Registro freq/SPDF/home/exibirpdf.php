<?php

require_once("../fpdf/fpdf.php");

//conexão com o banco
$host="localhost";
$user="root";
$pass="";
$banco="sistema_frequencia";
$conexao=mysqli_connect($host,$user,$pass,$banco);

$sql=("select * from aluno inner join frequencia inner join falta inner join turma inner join disciplina where bimestre = 1 and aluno.id = falta.id_aluno and frequencia.id_aluno = aluno.id and disciplina.id = frequencia.id_disciplina");
	//$sql1=("SELECT DISTINCT turma,serie,ano FROM turma INNER join aluno where aluno.id_turma = turma.id");
$busca = mysqli_query($conexao,$sql);
	//$busca1 = mysqli_query($conexao,$sql1);

//objeto
//L paisagem
$pdf = new FPDF("P","pt","A4");

// cria a página
$pdf->AddPage();

//tipo da fonte/negrito ou vazio/tamanho da fonte
$pdf->SetFont('arial','B',18);

// quebra de linha
$pdf->Ln(20);

// configuração de impressão margem esquerda-superior-/borda/quebra de liha/
//LARGURA E ALTURA
$pdf->Cell(0,5,utf8_decode("FREQUÊNCIA"),0,1,'C');

//Linha de contorno
//$pdf->Cell(0,20,"teste",0,1,'C');
$pdf->Ln(20);
$pdf->SetFillColor(0,0,255);
//aluno nomes
$pdf->SetFont('arial','B',12);

/*$pdf->Cell(180,20,"Turma",1,1,'C',1);*///a quebra de linha tem que ser 1

$pdf->Ln(20);	
//$pdf->Cell(540,20,"Turma",1,1,'C',1);

/*while ($resultado1 = mysqli_fetch_array($busca1)) {
$pdf->Cell(270,20,$resultado1['ano'],1,0,'C');
$pdf->Cell(270,20,$resultado1['turma'],1,0,'C');
}
$pdf->Ln(40);*/	

$pdf->Cell(180,20,"Aluno",1,0,'C',1);
$pdf->Cell(110,20,"Disciplina",1,0,'C',1);
$pdf->Cell(60,20,"Bimestre",1,0,'C',1);
$pdf->Cell(50,20,"Faltas",1,0,'C',1);
$pdf->Cell(50,20,"Ano",1,0,'C',1);
$pdf->Cell(75,20,"Curso",1,1,'C',1);





while ($resultado = mysqli_fetch_array($busca)) {
	$pdf->Cell(180,20,$resultado['nome'],1,0,'C');
	$pdf->Cell(110,20,$resultado['disciplina'],1,0,'C');
	$pdf->Cell(60,20,utf8_decode($resultado['bimestre']),1,0,'C');
	$pdf->Cell(50,20,$resultado['quantidade'],1,0,'C');
	$pdf->Cell(50,20,$resultado['ano'],1,0,'C');
	$pdf->Cell(75,20,$resultado['turma'],1,1,'C');

	
}
/*for ($i=0; $i < 5; $i++) { 
$pdf->Cell(180,20,"OTAVIO",1,0,'C');
$pdf->Cell(130,20,"POO",1,0,'C');
$pdf->Cell(130,20,utf8_decode("2º"),1,0,'C');
$pdf->Cell(100,20,"6",1,1,'C');
}*/


// i abre / d dowload / f salva
$pdf->Output("arquivo.pdf","I");









?>