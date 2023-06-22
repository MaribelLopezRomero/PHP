<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 1</h1>

    <?php

    $palabra = "mujer";
    $intento = "pulpo";

    $arraypalabra = str_split($palabra);
    $arrayintento = str_split($intento);

    $posicion = 0;
    $contador = 0;

    while ($posicion < count($arraypalabra)) {
        if ($arraypalabra[$posicion] == $arrayintento[$posicion]) {
            echo "la letra " . $arraypalabra[$posicion] . " coincide en la posicion ", $posicion;
            echo "<br>";
            $contador++;
        } else {
            echo "la letra " . $arraypalabra[$posicion] . " no coincide en la posicion ", $posicion;
            echo "<br>";
        }

        $posicion++;
    }

    echo $contador . " letras coinciden en la posicion";



    ?>

    <h1>Ejercicio 2</h1>

    <?php

    $palabra1 = "papaya";
    $palabra2 = "cuenca";

    $n = rand(0, strlen($palabra1));
    $n2 = rand(0, strlen($palabra2));

    $sunstring1 = substr($palabra1, 0, $n);

    $sunstring2 = substr($palabra2, 0, $n2);

    $concatenar =   $sunstring1 . $sunstring2;

    echo $concatenar;


    ?>

    <h1>Ejercicio 3.Transformar mayusculas las vocales</h1>

    <?php

    $palabra = "mayuscula";

    $arrayVocales = ['a', 'e', 'i', 'o', 'u'];


    $array_palabra = str_split($palabra);

    $palabraTransformada = "";

    foreach ($array_palabra as $value) {
        if (in_array($value, $arrayVocales)) {
            $palabraTransformada =   $palabraTransformada . strtoupper($value);
        } else {
            $palabraTransformada  = $palabraTransformada . strtolower($value);
        }
    }

    echo  $palabraTransformada;

    ?>

    <h1>Ejercicio 4</h1>

    <?php

    $palabra = "mayuscula";

    $palabraOrdenada = strrev($palabra);

    echo $palabraOrdenada;

    ?>


    <h1>Ejercicio 5</h1>

    <?php

    $palabra = "mayuscula";

    $letra = "m";

    $indiceOcurrencia = strpos($palabra, $letra);

    echo $indiceOcurrencia;

    ?>

    <h1>Ejercicio 6</h1>

    <?php

    $cadena = "Eliminando espacios y sustituyendo vocales por *";

    $espacio = " ";

    $sinEspacio = "";

    $cadenaSinEspacio = str_replace($espacio, $sinEspacio, $cadena);

    echo "Cadena sin espacios: " .  $cadenaSinEspacio;

    $arrayVocales = ['a', 'e', 'i', 'o', 'u'];

    $arraycadenaSinEspacio = str_split($cadenaSinEspacio);

    $nuevaCadena = "";

    foreach ($arraycadenaSinEspacio as $value) {
        if (in_array($value, $arrayVocales)) {
            $nuevaCadena = $nuevaCadena . "*";
        } else {
            $nuevaCadena = $nuevaCadena . $value;
        }
    }

    echo '<br>';

    echo " Cadena sin espacio y sustituyendo vocales por *: " . $nuevaCadena;



    ?>

    <h1>Ejercicio 7</h1>

    <?php

    $cadena = "Eliminando vocales y ordenando consonantes alfabeticamente";

    $arrayVocales = ['a', 'e', 'i', 'o', 'u'];

    $cadenaSinVocales = "Eliminando vocales y ordenando consonantes alfabeticamente";

    foreach ($arrayVocales as $value) {

        $cadenaSinVocales = str_replace($value, "", strtolower($cadenaSinVocales));
    }

    echo "Cadena sin vocales: " . $cadenaSinVocales;

    $arrayCadenaSinVocales = str_split($cadenaSinVocales);

    sort($arrayCadenaSinVocales);

    $cadenaOrdenada = implode("", $arrayCadenaSinVocales);

    echo "<br>";
    echo "Cadena ordenada y sin vocales: " . $cadenaOrdenada;

    ?>
</body>

</html>