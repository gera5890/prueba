<?php
//abstract es para la clase que no se tiene que instasear solo puede heredar

 abstract class Transporte{

    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
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


?>