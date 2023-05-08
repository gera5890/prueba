<?php

/**
 * FUNCION: Una funcion es un conjunto de instrucciones agrupadas bajo el mismo nombre
 * y que pueden reutilizarse solamente invocando a la funcion tantas veces que queramos
 */

 function ImprimirNombre(){
    echo "Mi nombre es Gera";
 }

 ImprimirNombre();
 echo "<br>";

 function tablaMultiplicar($numero){
    for ($i=1; $i <= 10 ; $i++) { 
        echo $numero .' x '. $i . ' = '. ($i*$numero) . '<br>';
    }
 }

 tablaMultiplicar(55);
 echo "<br>";

 function suma($numberOne, $numberTwo):float{
   $resultado = $numberOne + $numberTwo;
   return $resultado;
 }

 function resta($numberOne, $numberTwo):float{
   $resultado = $numberOne - $numberTwo;
   return $resultado;
 }

 function producto($numberOne, $numberTwo):float{
   $resultado = $numberOne * $numberTwo;
   return $resultado;
 }

 function division($numberOne, $numberTwo):float{
   $resultado = $numberOne / $numberTwo;
   return $resultado;
 }

 echo suma(5, 10);
 echo "<br>";
 echo resta(15, 10);
 echo "<br>";

 echo producto(25, 10);
 echo "<br>";

 echo division(100, 523);
 echo "<br>";

 function sumas($numberOne, $numberTwo, $numberThree = null):float{
   $resultado = $numberOne + $numberTwo + $numberThree;
   return $resultado;
 }

 echo sumas(50,20);
 echo "<br>";

 echo sumas(50,20,1025);
 echo "<br>";

 function baseAltura($base, $altura):float{
   $alturaBase = $base * $altura;
   return $alturaBase; 
 }

 function area():float{
   $baseAltura = baseAltura(10, 40);
   $area = $baseAltura / 2;
   return $area;
 }

 echo area();



 ?>