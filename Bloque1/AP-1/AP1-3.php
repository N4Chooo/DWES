<?php
 $array = [
     1 => "primero",
     3 => "segundo",
     5 => "tercero",
     7 => "cuarto",
     9 => "quinto",
     11 => "sexto",
 ];
 $par = "" ;
 $impar ="" ;
 $sumaClaves = 0;
 foreach ($array as $clave => $valor) {
     if ($valor == "primero" || $valor == "tercero" || $valor == "quinto") {
         echo "Estas en una posicion impar <br>";
         $ìmpar = true;
         $par = false;
     }elseif ($valor == "segundo" || $valor == "cuarto" || $valor == "sexto") {
         echo "Estas en una posicion par <br>";
         $par = true;
         $impar = false;
     };

     $sumaClaves += $clave;
     echo $sumaClaves . "<br>";
     if ($sumaClaves  > 5 && $sumaClaves < 10) {
         echo "El valor de la suma es mayor que 5 <br>";
     }elseif ($sumaClaves > 10 && $sumaClaves < 20) {
         echo "El valor de la suma es mayor que 10 <br>";
     }elseif ($sumaClaves > 20) {
         echo "El valor de la suma es mayor que 20 <br>";
     };
     echo "<br>";
 }

