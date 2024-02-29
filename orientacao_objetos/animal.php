<?php

class Animal {
    public $tipo;
    public $especie;
    public $voa;

    public function __construct($tipo, $especie, $voa) {
        $this->tipo = $tipo;
        $this->especie = $especie;
        $this->voa = $voa;

    }

    public function voar() {
        if($this->voa){
            echo "Voando...";
        } else{
            echo "Esse animal não voa...";
        }
    }
        
    public function mostrarDetalhe() {
        $voa = "Sim";

        echo "<br/>";
        echo "Detalhe do meu animal...";
        echo "";
        echo "Tipos: " . $this->tipo;
        echo "<br/>";
        echo "Especie: " . $this->especie;
        echo "<br/>";
        
        if(!$this->voa){
            echo "Voa: Não";
            echo "<br/>";
            return;
        }

        echo "Voas " . $voa;
        echo "<br/>";
    }
}

?>