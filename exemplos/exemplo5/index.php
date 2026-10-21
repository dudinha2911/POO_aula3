<?php

require_once 'Aluno.php';
require_once 'Professor.php';

$aluno = new Aluno('Dudinha', 16, 'DS');
$aluno->exibirInformacoes();
$aluno->exibirCurso();

echo "<br><br>";

$professor = new Professor('Rafael', 22, 'EF');
$professor->exibirInformacoes();
$professor->exibirDisciplina();

?>