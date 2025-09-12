<?php
$array= array();

$array = $_GET;

foreach ($array as $clave => $valor) {
    if (is_numeric($valor)){
        echo"Se ha recibido un numero <br>";
    }elseif (is_null($valor) || empty($valor) || $valor == "null"){
        "No se ha recibido ningun dato o es nulo <br>";
    }elseif (!is_numeric($valor)){
        echo "Se ha recibido una cadena de caracteres <br>";
    }
}