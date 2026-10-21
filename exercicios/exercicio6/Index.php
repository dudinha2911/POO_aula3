<?php

require_once 'ProdutoFisico.php';
require_once 'ProdutoDigital.php';

$produtoFisico = new ProdutoFisico('Lápis', 2.50, '5');
$produtoFisico->mostrarProduto();
$produtoFisico->mostrarPeso();

echo "<br><br>";

$produtoDigital = new ProdutoDigital('Tablet', 100.000, '13');
$produtoDigital->mostrarProduto();
$produtoDigital->mostrarTamanho();

?>