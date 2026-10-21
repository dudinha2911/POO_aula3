<?php

class Pessoa{
    public function apresentar(){
        echo "Olá, eu sou uma pessoa!";
    }
}

class Aluno extends Pessoa{
}

$aluno1 = new Aluno();
$aluno1->apresentar();

?>