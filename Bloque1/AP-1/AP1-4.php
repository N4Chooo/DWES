<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>AP1-4.php</title>
</head>
<body>
<form action="#" method="POST">
        <label for="elegir">Elige una figura:</label>
        <select name="elegir" id="elegir">
            <option value="ninguno"> </option>
            <option value="triangulo">Triangulo</option>
            <option value="rectangulo">Rectangulo</option>
            <option value="circulo">Circulo</option>
        </select>
    <button type="submit">Enviar</button><br><br>

    Triangulo o rectangulo : <br>
    <label for="base">Base:</label>
    <input type="number" name="base" id="base"><br>
    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura"><br><br>

    Circulo : <br>
    <label for="radio">Radio:</label>
    <input type="number" name="radio" id="radio"><br>

</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function calcularAreaTriangulo($base, $altura)
    {
        $area = ($base * $altura) / 2;
        echo $area;
    }

    ;
    function calcularAreaRectangulo($base, $altura)
    {
        $area = $base * $altura;
        echo $area;
    }

    ;
    function calcularAreaCirculo($radio)
    {
        $area = pi() * ($radio * $radio);
        echo $area;

    }

    if ($_POST['elegir'] == "ninguno") {
        echo "Elige uno";
        } else {
            if ($_POST['elegir'] != "circulo") {
                if ($_POST['base'] && $_POST['altura']) {
                    if ($_POST['elegir'] == "triangulo") {
                        calcularAreaTriangulo($_POST['base'], $_POST['altura']);
                    } elseif ($_POST['elegir'] == "rectangulo") {
                        calcularAreaRectangulo($_POST['base'], $_POST['altura']);
                    }
                } else {
                    echo "Rellena la base y altura";
                };
            } elseif ($_POST['radio']) {
                    calcularAreaCirculo($_POST['radio']);
                } else {
                    echo "Rellena el radio";
                };
        }
    }

