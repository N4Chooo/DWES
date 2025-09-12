<?php
$array= array();

$array = $_GET;

foreach ($array as $clave => $valor) {
     echo "Se ha recibido ". $valor . " para la clave " . $clave . "<br>" ;
}

