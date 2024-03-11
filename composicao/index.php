<?php 
require_once("./turma.php");
require_once("./aluno.php");
require_once("./utils/printCode.php");
require_once("./utils/gerarCodigo.php");
require_once("./mentor.php");
require_once("./reforcoAula.php");

$aluno1 = new Aluno("Pedro", "Silva", "pedro@pedro.com");
$aluno2 = new Aluno("Maria", "Silva", "maria@maria.com");
$aluno3 = new Aluno("João", "Silva", "joao@joao.com");

$mentor = new Mentor("Marcelo", "Duarte", "marcelo@marcelo.com", "Junior");

$turma1 = new Turma('Despertar Dev', '000', 'Em andamento');
$turma1->adicionarAluno($aluno1, $aluno2);
// $turma1->adicionarAluno($aluno2);
// $turma1->adicionarAluno($aluno3);

// printCode($turma1);
$turma1->adicionarAluno($aluno3);
$turma1->listarAlunos();

$aula = new ReforcoAula($aluno2, $mentor);

printCode($turma1);

