<?php

require_once 'Animal.php';

class Cachorro extends Animal{
    private string $raca;

    public function __construct($nome, $idade, $raca){
        parent::__construct($nome, $idade);
        $this->raca = $raca;
    }

    public function latir(){
        echo "<b> | Raça: </b>" . $this->raca . "<b> | Latir: </b> AU AU";
    }
}


?>