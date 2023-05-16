<?php

//require "./classes/Clientes.php";
//require "./classes/Detalles.php";

function autoload($clase){
    require __DIR__ . "/classes/" . $clase. '.php';
}

spl_autoload_register('autoload');

$clientes = new Clientes();
$detalles = new Detalles();

?>