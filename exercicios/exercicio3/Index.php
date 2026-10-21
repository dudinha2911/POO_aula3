<?php

require_once 'Gerente.php';
require_once 'Desenvolvedor.php';

$gerente = new Gerente('Dudinha', 20000, 'RH');
$gerente->exibirInformacoes();
$gerente->gerenciarEquipe();

echo "<br><br>";

$desenvolvedor = new Desenvolvedor('Rafaela', 1200, 'PHP');
$desenvolvedor->exibirInformacoes();
$desenvolvedor->programar();

?>