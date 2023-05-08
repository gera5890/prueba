<?php

//Debuggear
$nombre = "Gera";
var_dump($nombre);

//Fechas
echo date("d-m-y");
echo "<br>";

echo time();
echo "<br>";


//Matematicas
echo "La raiz cuadrada de 10: " .sqrt(10);
echo "<br>";

echo "Numero aleatorio: " . rand(10,40);
echo "<br>";


echo "Numero pi: " . pi();
echo "<br>";

echo 'Redondear el valor de pi: ' . round(pi(),4);
echo "<br>";

//Funciones generales

echo gettype($nombre);
echo "<br>";

echo is_numeric($nombre) ? "No es un string" : "Es un string";
echo "<br>";

echo isset($edad) ? "La variable existe" : "La variable no existe";
echo "<br>";

//Limpiar espacios
$frase = "               Esta es una frase en php          ";
trim($frase);
echo "<br>";

echo $frase;
echo "<br>";

//Eliminar variables / indices
$year = 2023;
echo($year);
echo "<br>";

unset($year);
echo $year;
echo "<br>";

//Contar caracteres 
$apellido = "Vera Velasco";
echo strlen($apellido);
echo "<br>";


//Encontrar un caracter
$frase = "Los libros son las fuentes perenes del conocimiento";
echo $frase;
echo "<br>";

echo strpos($frase, "p");
echo "<br>";

//Reemplazar palabras dentro de un string
$reemplazo = str_replace("fuentes", "cacas", $frase);
echo $reemplazo;
echo "<br>";

?>