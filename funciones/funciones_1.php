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
    include("funciones.php");
    ?>

    <h1>Ejercicio 1.1</h1>

    <h2>Valor minimo</h2>
    <?php
    $array = [1, 3, 4, 2, 6, 7];

    echo valorMinimo($array);
    ?>

    <h2>Valor maximo</h2>
    <?php
    $array = [1, 3, 4, 2, 6, 7];

    echo valorMaximo($array);
    ?>

    <h2>Media</h2>
    <?php
    $array = [1, 3, 4, 2, 6, 7];

    echo media($array);
    ?>

    <h2>Search</h2>
    <?php
    $array = [1, 3, 4, 2, 6, 7];

    echo search($array, 7);
    ?>

    <h1>Ejercicio 1.2</h1>

    <h2>Fila Bidimensional</h2>
    <?php
    $array = [["Desayuno" => "leche", "Comida" => "lentejas", "Cena" => "Lubina"], ["Desayuno" => "tostadas", "Comida" => "pizza", "Cena" => "esparragos"], ["Desayuno" => "bolleria", "Comida" => "pasta", "Cena" => "huevos"]];

    $fila = 1;

    print_r(FilaArray($array, $fila))

    ?>

    <h2>Columna Bidimensional</h2>
    <?php
    $array = [["Desayuno" => "leche", "Comida" => "lentejas", "Cena" => "Lubina"], ["Desayuno" => "tostadas", "Comida" => "pizza", "Cena" => "esparragos"], ["Desayuno" => "bolleria", "Comida" => "pasta", "Cena" => "huevos"]];

    $columna = "Desayuno";

    print_r(columnaArray($array, $columna))

    ?>

    <h2>Coordenadas</h2>

    <?php
    $array = [["Desayuno" => "leche", "Comida" => "lentejas", "Cena" => "Lubina"], ["Desayuno" => "tostadas", "Comida" => "pizza", "Cena" => "esparragos"], ["Desayuno" => "bolleria", "Comida" => "pasta", "Cena" => "huevos"]];

    $elemento = "lentejas";

    echo coordenadasArray($array, $elemento);

    ?>

    <h1>Ejercicio 2</h1>

    <h2>Numero primo</h2>
    <?php
    $numero = 16;

    if (Primo($numero)) {
        echo 'Es primo';
    } else {
        echo 'No es primo';
    }


    ?>

    <h2>Numeros primos anteriores</h2>

    <?php
    $numero = 16;

    $arrayPrimos =  numerosPrimos($numero);

    echo "Los numero primeros anteriores de ". $numero. " son: " .implode(" ", $arrayPrimos);




    ?>


</body>

</html>