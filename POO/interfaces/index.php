<?php


interface transporteInterface{
    public function getInfo() : string;
    public function getPropiedades() ;
    public function setRuedas(int $ruedas) : void;
}

class Transporte implements transporteInterface{

    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        $informacion = "Informacion";
        return $informacion;
    }

    public function setRuedas(int $ruedas) : void{
        $this->ruedas = $ruedas;
    }

    public function setCapacidad(int $capacidad) : void{
        $this->capacidad = $capacidad;
    }

    public function getPropiedades(){
        echo "El transprte tiene $this->ruedas y unca capacidad de $this->capacidad";
    }
}
