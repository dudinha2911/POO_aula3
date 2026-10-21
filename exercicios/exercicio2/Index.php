<?php

require_once 'Carro.php';
require_once 'Moto.php';

$carro = new Carro('BWD', 2026, 4);
$carro->apresentarVeiculo();
$carro->mostrarCarro();

echo "<br><br>";

$moto = new Moto('BIS', 2016, 1556);
$moto->apresentarVeiculo();
$moto->mostrarMoto();

?>