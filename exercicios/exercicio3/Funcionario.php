<?php

class Funcionario{
    protected string $nome;
    private float $salario;

    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function exibirInformacoes(){
        echo "<b>Nome: </b>" . $this->nome . "<b> | Salário: </b>" . $this->salario;
    }
}

?>