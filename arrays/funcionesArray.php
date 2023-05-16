<?php

    $cantantes = array("drake", "tupac", "biggie", "snopp");

    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";



    //Ordenar un array alfabeto a-z
    asort($cantantes);
    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";


    
    //Ordenar un array alfabeto z-a
    arsort($cantantes);
    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";



    //Agregar un elemento a un array enm la ultima posicion
    array_push($cantantes, "lupe fiasco");

    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";




    //Agregar un elemento a un array en la primer posicion
    array_unshift($cantantes, "Hector Lavoe");

    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>"; 



    //eliminar el ultimo elemento de el array

    array_pop($cantantes);
    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";



    //eliminar un elemento en concreto del array

    unset($cantantes[2]);
    echo "<pre>";
    var_dump($cantantes);
    echo "</pre>";



    //Elemento de forma aleatoria 

    $aleatorio = array_rand($cantantes);
    var_dump($cantantes[$aleatorio]);



    //Dar la vuelta a un array

    $nuevoCantantes = array_reverse($cantantes);
    echo "<pre>";
    var_dump($nuevoCantantes);
    echo "</pre>";



    //Buscar un elemento dentro de un array

    $resultado = array_search("tupac", $cantantes);
    var_dump($resultado);



    //Contar numero de elememtos
    echo "<pre>";
    var_dump(count($cantantes));
    echo "</pre>";
?>