<?php

require_once 'Animal.php';

class Gato extends Animal{
    private $cor;

    public function __construct($nome, $idade, $cor){
        parent::__construct($nome, $idade);
        $this->cor = $cor;
    }

    public function miar(){
        echo "<b> | Cor: </b>" . $this->cor . "<b> | Miar: </b> MIAU MIAU";
    }
}

?>