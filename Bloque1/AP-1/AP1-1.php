<?
$array = ['hola' => $_GET['hola'],
         'clave' => $_GET['clave'],
         'clave2' => $_GET['clave2'],];

foreach ($array as $clave => $valor) {
     echo "Se ha recibido ". $valor . " para la clave " . $clave . "<br>" ;
}

