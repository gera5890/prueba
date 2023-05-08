<?php

/**
 * Escribir todos los numeros que esten entre los paramteros
 * enviados por la URL
 */

 if(isset($_GET['numberOne']) and !empty($_GET['numberOne']) and isset($_GET['numberTwo']) and !empty($_GET['numberTwo'])){

    if(is_numeric($_GET['numberOne']) and is_numeric($_GET['numberTwo'])){
        $numberOne = $_GET['numberOne'];
        $numberTwo = $_GET['numberTwo'];

        for ($i=$numberOne + 1; $i < $numberTwo; $i++) { 
            echo "$i <br>";
        }
    }else{
        echo "Ingrese solo numeros"; 
    }

 }else{
    echo "No se inserto ningun dato";
 }

?>