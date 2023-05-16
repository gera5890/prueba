<?php

class Persona{
    public $nombre;
    public $apellidoPaterno;
    public $apellidoMaterno;
    public $edad;


    public function __construct($nombre, $apellidoPaterno,
    $apellidoMaterno, $edad)
    {
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
    }

    public function imprimirAtributos(){
        echo "El nombre de la presona es: $this->nombre sus apellidos son: $this->apellidoPaterno y $this->apellidoMaterno
         y su edad es de: $this->edad <br>";
    }

}

$persona = new Persona("Gerardo", "Vera", "Velasco", 27);
$persona->imprimirAtributos();


$persona2 = new Persona("Sahian", "Cruz", "Sanchez", 24);
$persona2->imprimirAtributos();
?>