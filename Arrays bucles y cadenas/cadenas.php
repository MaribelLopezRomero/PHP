<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadenas. Maribel López</h1>

    <?php

    $texto = "En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.";

    echo "<table border =1>";
    echo "<tr>";
    echo "<td> Numero de caracteres que tiene el texto</td>";
    echo "<td>" . strlen($texto) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Texto resultante a partir de hidalgo</td>";
    echo "<td>" . strstr($texto, "hidalgo") . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Posicion en la que aparece la palabra \"Mancha\" desde el principio del texto</td>";
    echo "<td>" . strpos($texto, "Mancha") . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Texto resultante a partir de la posicion 20</td>";
    echo "<td>" . substr($texto, 20) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Texto resultante a partir de la posicion 20 sustituyendo de por piobaroja</td>";
    echo "<td>" . substr(str_replace("de", "PIO BAROJA", $texto), 20)  . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> número de apariciones de la palabra “de” en el texto inicial</td>";
    echo "<td>" . substr_count($texto, "de") . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> texto resultante de añadirle el carácter “L” por la derecha hasta alcanzar la longitud de 220 caracteres</td>";
    echo "<td>" . str_pad($texto, 220, "L") . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Texto convertido en mayusculas </td>";
    echo "<td>" . strtoupper($texto) . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Texto separado por comas</td>";

    $array = explode(',', $texto);

    echo  "<td>";
    foreach ($array as $texto) {
        echo  $texto;
        echo "<br>";
    };
    echo  "</td>";
    echo "</tr>";


    echo "<tr>";
    echo "<td> carácter asociado al código ASCII 165</td>";
    echo "<td>" . chr(165) . "</td>";
    echo "</tr>";

    //Caracter mas usado

    $arrayVeces =  count_chars($texto, 1);
    $contador = 0;
    $letra;

    foreach ($arrayVeces as $key => $value) {
        if ($value > $contador) {
            $contador = $value;
            $letra = $key;
        }
    }

    echo "<tr>";
    echo "<td> carácter más repetido y cuantas veces aparece.
    </td>";
    echo "<td>" . chr($letra) . "</td>";
    echo "</tr>";

    //caracteres que no aparecen

    echo "<tr>";
    echo "<td> cuales son los caracteres que no aparecen</td>";
    echo "<td>" . count_chars($texto, 4) . " </td>";
    echo "</tr>";

    echo "</table>";

    ?>

</body>

</html>