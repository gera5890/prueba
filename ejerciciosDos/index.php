<?php

/*
Realizar un programa que contenga un array de 11 elementos y 
que haga lo siguiente.

-Recorrerlo y mostrarlo
-Ordenarlo y mostrarlo
-Mostrar su longitud
-Buscar algun elemento del array

*/

function imprimir($array){

    foreach ($array as $value) {
        echo "$value <br>";
    }
    echo "<hr>";
}

function ordenar($array){
    asort($array);

    imprimir($array);
}

function findElement($element, $array){
    $result = array_search($element, $array);
    echo "$result";
}

$array = [512,5,32,3,15,1641,1,98,3,5];

imprimir($array);
ordenar($array);
findElement(32, $array);

var_dump(
    sizeof($array));

echo "<hr>";

/**
 * Escribir un programa que añada valores a un array mientras
 * que su longitud sea menor a 120 y luego mostrarlo
 */

 function addElementoToArray($numberOfElements, $array) : array {
    for ($i=0; $i < $numberOfElements; $i++) { 
        array_push($array, rand(0,120));
    }
    return $array;
 }

 $numbers = [];

 $newNumbers = addElementoToArray(120, $numbers);
 echo "<pre>"; 
 var_dump($newNumbers) ;
 echo "<pre>";

?>      