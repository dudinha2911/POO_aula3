<?php

require_once 'Livro.php';
require_once 'Revista.php';

$livro = new Livro('Memórias Póstumas', 1920, 'Machado de Assis');
$livro->mostrarTitulo();
$livro->mostrarLivro();

echo "<br><br>";

$revista = new Revista('Cosmopolitan', 1965, 'Edição Especial As Kardashians' );
$revista->mostrarTitulo();
$revista->mostrarRevista();

?>