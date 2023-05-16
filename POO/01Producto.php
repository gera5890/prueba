<?php

class Producto{

    /**
     * PHP 7
     * 
    public $nombre;
    public $precio; 
    public $disponible;


     
    public function __construct(string $nombre, float $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible; 
    }
    */

    //PHP 8

    public function __construct(public string $nombre,
    public int $precio, public bool $diponible)
    {
        
    }

    public function imprimirAtributos(){
        "El producto es $this->nombre y su precio es de $this->precio";
    }


}

$producto = new Producto("Tablet",200, true);
$producto->imprimirAtributos();

$producto2 = new Producto("Pantalla curva", 53000, false);
$producto2->imprimirAtributos();


echo "<pre>";
var_dump($producto);
echo "</pre>";


echo "<pre>";
var_dump($producto2);
echo "</pre>";




?>