<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php


    // $matriz1[] = "Madrid";
    // $matriz1[] = "Zaragoza";
    // $matriz1[] = "Bilbao";
    // $matriz1[] = "Valencia";

    // function ordenarValores1($a, $b)
    // {
    //     $fina = $a[strlen($a) - 1];
    //     $finb = $a[strlen($b) - 1];

    //     if ($fina == $finb) return 0;
    //     return ($fina > $finb) ? 1 : -1;
    // }

    // echo usort($matriz1, "ordenarValores1");

    // while (list($pos, $valor) = each($matriz1)) {
    //     echo $pos;
    //     echo "<br>";
    //     echo $valor;
    // }




    ?>

    <h1>Ejercicio 1</h1>

    <?php

    $arrayAlumnos = ["Maribel López", "Rocio López", "Alex Barba", "Belen Cao"];

    asort($arrayAlumnos);

    echo "Alumnos matriculados en 2º DAW curso 2021/2022";

    echo "<br>";

    echo "El número de alumnos matriculados en 2º DAW es:" . count($arrayAlumnos);

    echo "<br>";

    foreach ($arrayAlumnos as $value) {
        echo $value;
        echo "<br>";
    }
    ?>

    <h1>Ejercicio 2</h1>

    <?php
    $arrayEmpleados = ["empleado1" => ["nombre" => "Maribel", "apellidos" => "López Romero", "fecha_nac" => "31/3/193", "direccion" => "calle camino viejo de leganes", "email" =>  "maribel@gmail.com", "salario_bruto" => "25k", "comisiones" => "10k"], "empleado2" => ["nombre" => "Rocio", "apellidos" => "López Romero", "fecha_nac" => "1/3/193", "direccion" => "calle camino viejo de leganes", "email" =>  "rocio@gmail.com", "salario_bruto" => "25k", "comisiones" => "10k"], "empleado3" => ["nombre" => "Candela", "apellidos" => "López Romero", "fecha_nac" => "6/6/193", "direccion" => "calle camino viejo de leganes", "email" =>  "candela@gmail.com", "salario_bruto" => "30k", "comisiones" => "10k"]];


    function mostrarDatos($nombre, $arrayEmpleados)
    {

        foreach ($arrayEmpleados as $key => $value) {

            foreach ($value as $key => $value1) {
                if ($key == "nombre" && $value1 == $nombre) {
                    $arrayImprimir = $value;
                }
            }
        }

        //Mostrar los datos

        foreach ($arrayImprimir as $key => $value) {
            echo "El " . $key . " es " . $value;
            echo "<br>";
        }
    };


    //Llamamos a la funcion
    mostrarDatos("Maribel", $arrayEmpleados);
    ?>


    <h1>Ejercicio 3. Ordenar alfabeticamente array asociativo</h1>

    <?php

    //ksort -- ordena las claves, manteniendo la relacion de claves-valor

    $arrayNombres = ["Maribel" => "1993", "Rocio" => "1994", "Candela" => "1964"];

    ksort($arrayNombres);

    print_r($arrayNombres)


    ?>


    <h1>Ejercicio 4. Ordenar de fecha nacimiento array asociativo</h1>

    <?php

    //asort -- ordena los valores, manteniendo la realcion de claves-valor

    $arrayNombres = ["Maribel" => "1993", "Rocio" => "1994", "Candela" => "1964"];

    asort($arrayNombres);

    print_r($arrayNombres)


    ?>

    <h1>Ejercicio 5. </h1>

    <?php

    $arrayNotas = ["Maribel" => ["BD" => "8", "Programacion" => "10", "SI" => "9", "LM" => "8", "ED" => "9", "FOL" => "9"], "Alex" => ["BD" => "8", "Programacion" => "8", "SI" => "8", "LM" => "8", "ED" => "8", "FOL" => "8"], "Belen" => ["BD" => "7", "Programacion" => "8", "SI" => "8", "LM" => "8", "ED" => "8", "FOL" => "7"], "Juan" => ["BD" => "7", "Programacion" => "8", "SI" => "7", "LM" => "7", "ED" => "7", "FOL" => "7"]];


    $modulo = "todos";

    $alumno = "Juan";

    foreach ($arrayNotas as $key => $value) {
        if ($key == $alumno) {

            foreach ($value as $key => $value1) {

                if ($modulo == "todos") {
                    echo "La nota del " . $alumno . " en el modulo de " . $key . " es: " . $value1;
                    echo "<br>";
                }

                if ($key == $modulo) {
                    echo "La nota del " . $alumno . " en el modulo de " . $modulo . " es: " . $value1;
                }
            }
        }
    }

    ?>

    <h1>Ejercicio 6. Ordenar por la segunda letra</h1>

    <?php

    $array = ["casa", "arbol", "mujer", "feliz", "verdad", "paz"];

    function ordenarValores($a, $b)
    {


        $segundaA = $a[1];
        $segundaB = $b[1];

        if ($segundaA == $segundaB) return 0;
        return ($segundaA > $segundaB) ? 1 : -1;
    }

    usort($array, "ordenarValores"); //ordena un array segun sus valores usando ua funcion de comparacion definida por el usuario



    foreach ($array as $value) {
        echo $value;
        echo "<br>";
    }


    ?>




</body>

</html>