<?php

class Pessoa{
    protected string $nome;

    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Aluno extends Pessoa{
    private string $curso;

    public function __construct($nome, $curso){
        parent:: __construct($nome);
        $this->curso = $curso;
    }

    public function exibirInformacoes(){
        echo "Nome: " . $this->nome . " | Curso: " . $this->curso . ".";
    }
}

$aluno1 = new Aluno('Dudinha', 'Desenvolvimento de Sistemas');
$aluno1->exibirInformacoes();

?>