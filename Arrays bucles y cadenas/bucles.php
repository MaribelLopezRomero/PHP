<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Triangulo de asteriscos</h1>

    <table border=1>
        <?php
        $asterisco = "";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            echo "<td>";
            echo  $asterisco = $asterisco . "*";
            echo "</td>";
            echo "</tr>";
        };
        ?>
    </table>

    <h1>Comidas</h1>

    <table border=1>

        <?php

        $comidas = array("Lunes" => "Lentejas", "Martes" => "Ternera", "Miercoles" => "Pasta", "Jueves" => "Verduras", "Viernes" => "Pollo", "Sabado" => "Berenjenas Asadas", "Domingo" => "Lubina");

        echo "<tr>";
        foreach ($comidas as $key => $value) {

            echo "<td>";
            echo $key;
            echo "</td>";
        }

        echo "</tr>";

        echo "<tr>";
        foreach ($comidas as $key => $value) {

            echo "<td>";
            echo $value;
            echo "</td>";
        }

        echo "</tr>"

        ?>

    </table>

    <h1>Triangulo de numeros</h1>

    <?php

    $x = 1;
    $numeros = "";
    while ($x <= 5) {
        echo $numeros = $numeros . (string)$x;
        echo "<br>";
        $x++;
    }
    ?>

    <h1>Adivinar el numero. Con break </h1>

    <?php

    $adivina = 3;
    $intento = 1;

   while ($intento < 100) {

        echo "Introduzca un numero del 1 al 100";
        echo "<br>";
        echo "Numero introducido es ". $intento;
        echo "<br>";
        if ($intento == $adivina) {

            echo "<b>Correcto!! el numero era ". $adivina. "</b>";
            break;
        };
        $intento++;
    }

    echo "<h1> Adivina el numero. Sin break</h1>";

    $adivina1 = 3;
    $intento1 = 1;
    
    
    while (  $intento1 != $adivina1 ) {

        echo "Introduzca un numero del 1 al 100";
        echo "<br>";
        echo "Numero introducido es ". $intento1;
        echo "<br>";

        $intento1++;

    }

    echo "Introduzca un numero del 1 al 100";
    echo "<br>";
    echo "Numero introducido es ". $intento1;
    echo "<br>";
    echo "<b>Correcto!! el numero era ". $adivina1. "</b>";

    ?>

</body>

</html>