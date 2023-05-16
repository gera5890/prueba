<?php

/**
 * 
 * Un array es una colecciojn o conjunto de datos / valores
 *  bajo un unico nombre
*/

$carrito = ['table', 'television', 'computadora'];

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Agregar elemento al final del arreglo
array_push($carrito, "celular");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Agregar elemento en el principio del arreglo
array_unshift($carrito, "smart watch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$cantantes = ['Drake', 'tupac', 'biggie'];

//Imprimir un elemento accediendo a su indice
echo "<pre>";
var_dump($cantantes[1]);
echo "</pre>";

$cliente = [
    'nombre' => "Gerardo",
    'saldo' => 200,
    'informacion' => [
        'tipo' => "premium",
        'disponible' => 100
    ]
];

$clientes = [
    'nombre' => "Gerardo",
    'saldo' => 200,
    'informacion' => true,
    'tipo' => "premium",
    'disponible' => 100
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

//Recorrer array con un bucle for

for ($i=0; $i < count($cantantes); $i++) { 
    echo $cantantes[$i]."<br>";
}

//Recorrer array con foreach

foreach ($carrito as $key => $carro) {
    echo "$key.- $carro <br> ";
}

foreach($clientes as $propiedad => $cliente){
    echo "$propiedad => $cliente <br>";
}


$personas = array(
    'nombre' => 'Gerardo',
    'Apellidos' => 'Vera Velasco',
    'WEB' => 'gera.com'
);


echo "<pre>";
var_dump($personas['nombre']);
echo "</pre>";


//Array multidimesionales

$contactos = array(
    array(
        'nombre' => 'Gerardo',
        'Apellido' => 'Vera Velasco',
        'estudios' => array(
            'primaria' => 'Estado de Mexico',
            'secundaria' => "Juan Rulfo",
            "preparatoria" => "CCH Naucalpan"
        )
    ),
    array(
        'nombre' => 'Fernando',
        'Apellido' => 'Vera Velasco',
        'estudios' => array(
            'primaria' => 'Estado de Mexico',
            'secundaria' => "Juan Rulfo",
            "preparatoria" => "105"
        )
    ),
    array(
        'nombre' => 'Gustavo',
        'Apellido' => 'Vera Velasco',
        'estudios' => array(
            'primaria' => 'Estado de Mexico',
            'secundaria' => "Juan Rulfo",
            "preparatoria" => "Reginal Coacalco"
        )
    ),

);

foreach ($contactos as $key => $contacto) {
    echo $contacto['nombre'] ."<br>";
    echo $contacto['Apellido'] ."<br>";
    echo $contacto['estudios']['primaria'] ."<br>";
    echo $contacto['estudios']['secundaria'] ."<br>";
    echo $contacto['estudios']['preparatoria'] ."<br>";
    echo "<hr>";

}



?>