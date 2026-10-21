<?php

require_once 'Funcionario.php';

class Desenvolvedor extends Funcionario{
    private string $linguagemPrincipal;

    public function __construct($nome, $salario, $linguagemPrincipal){
        parent::__construct($nome, $salario);
        $this->linguagemPrinc = $linguagemPrincipal;
    }

    public function programar(){
        echo "<b> | Linguagem Princ.: </b>" . $this->linguagemPrinc;
    }
}

?>