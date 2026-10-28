<?php
require_once "Corrente.php";
require_once "Popanca.php";
$corrente = new ContaCorrente("Dudinha", 1000, 1234);
$corrente->mostrar_cartao();
$corrente->depositar(500);
$corrente->sacar(200);
$corrente->mostrar_cartao();

$poupanca = new ContaPoupanca("Duda", 1000, "reservar");
$poupanca->mostrar_objetivo();

?>