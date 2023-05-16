<?php

class Automovil{

    //Public se puede acceder y modificar en cualquier lugar
    //Protected unicamente en la clase 
    //private Solo miembros de la misma clase pueden acceder a el

    protected $nombre;
    protected $precio;
    protected $marca;
    protected $color;

    public function __construct(string $nombre, float $precio, string $marca, string $color)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->marca = $marca;
        $this->color = $color;
    }

    public function setNombre(string $nombre) : void{
        $this->nombre = $nombre;
    }

    public function getNombre() : string{
        return $this->nombre;
    }

    public function setPrecio(float $precio) : void{
        $this->precio = $precio;
    }

    public function getPrecio() : float{
        return $this->precio;
    }

    public function setMarca(string $marca) : void{
        $this->marca = $marca;
    }

    public function getMarca() : string{
        return $this->marca;
    }

    public function setColor(string $color) : void{
        $this->color = $color;
    }

    public function getColor() : string{
        return $this->color;
    }

}

$auto = new Automovil("chevy", 25000,"volkswagen","gris");
echo "<pre>";
var_dump($auto);
echo "</pre>";

$auto->setNombre("Chevy monsa");
$auto->setPrecio(2530.20);
echo "<pre>";
var_dump($auto);
echo "</pre>";

echo $autoNombre = $auto->getNombre();



?>