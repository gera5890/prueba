<?php

/**
 * Recibir dos parametros por la url usando GET y realizr las operaciones básicas
 * de una calculadora
 */

 if(isset($_GET['numberOne']) and !empty($_GET['numberOne']) and isset($_GET['numberTwo']) and !empty($_GET['numberTwo'])){
    $numberOne = $_GET['numberOne'];
    $numberTwo = $_GET['numberTwo'];

    if(is_numeric($numberOne) and is_numeric($numberTwo)){
      echo Suma($numberOne, $numberTwo);
      echo "<br>";
      echo Resta($numberOne, $numberTwo);
      echo "<br>";

      echo Producto($numberOne, $numberTwo);
      echo "<br>";

      echo Division($numberOne, $numberTwo);
      echo "<br>";

    }else{
      echo "Solo digite numeros";
    }
 }else{
    echo "Digite correctamente los datos";
 }

 function Suma($numberOne, $numberTwo) :float{
    $resultado = $numberOne + $numberTwo;
    return $resultado;
 }

 function Resta($numberOne, $numberTwo) : float{
   $resultado = $numberOne - $numberTwo;
   return $resultado;
 }

 function Producto($numberOne, $numberTwo):float{
   $resultado = $numberOne * $numberTwo;
   return $resultado;
 }

 function Division($numberOne, $numberTwo):float{
   $resultado = $numberOne / $numberTwo;
   return $resultado;
 }


?>