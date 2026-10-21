<?php

require_once 'Pessoa.php';

class Professor extends Pessoa{
    protected string $disciplina;

    public function __construct($nome, $idade, $disciplina){
        parent::__construct($nome, $idade);
        $this->disciplina = $disciplina;
    }

    // public function profInformacoes(){
    //     echo "Nome: " . $this->nome . " | Idade: " . $this->getIdade() . " | Disciplina: " . $this->disciplina;
    // }

    public function exibirDisciplina(){
        echo "<b> | Disciplina: </b>" . $this->disciplina;
    }
}

?>