<?php

class Bicicleta extends Transporte{

    protected $marcaPedales;

    public function setMarcaPedales(int $marcaPedales){
        $this->marcaPedales = $marcaPedales;
    }
}

?>