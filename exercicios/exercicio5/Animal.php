<?php

class Animal{
    protected string $nome;
    private int $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function mostrarNome(){
        echo "<b>Nome: </b>" . $this->nome . "<b> | Idade: </b>" . $this->idade;
    }

    public function getIdade(){
        return $this->idade;
    }
}

?>