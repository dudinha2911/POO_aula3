<?php

class Publicacao{
    protected string $titulo;
    private int $anoPublicacao;

    public function __construct($titulo, $anoPublicacao){
        $this->titulo = $titulo;
        $this->anoPubli = $anoPublicacao;

    }

    public function getAnoPublicacao(){
        return $this->anoPubli;
    }
    
    public function mostrarTitulo(){
        echo "<b>Título: </b>" . $this->titulo . "<b> | Ano Publi.:</b> " . $this->anoPubli;
    }
}

?>