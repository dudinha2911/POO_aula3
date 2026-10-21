<?php
class Veiculo{
    protected string $marca;
    private int $ano;

    public function __construct($marca, $ano){
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function apresentarVeiculo(){
        echo "<b>Marca: </b>" . $this->marca . "<b> | Ano: </b>" . $this->ano;
    }

    public function getAno(){
        return $this->ano;
    }
}

?>