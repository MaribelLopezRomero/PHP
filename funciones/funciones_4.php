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

    <h1>Potencia de un numero</h1>

    <?php

    $numero = 5;
    $potencia = 5;


    function recursivaPotencia($numero, $potencia)
    {

        if ($potencia == 0) {
            return 1;
        } else {

            return $numero * recursivaPotencia($numero, $potencia - 1);
        }
    }

    echo recursivaPotencia($numero, $potencia);


    ?>

    <h1>Binario</h1>

    <?php

    function decaBin($num)
    {
        if ($num >= 2) {
            decaBin($num / 2);
            echo $num % 2;
        } else echo intval($num);
    }

    decaBin(23);




    ?>

    <h1>Array iguales</h1>

    <?php

    $array1 = [1, 2, 3];
    $array2 = [1, 2, 3];


    // function arrayIgual ($array1, $array2) {

    //     $chivato=0;

    //     if((count($array1)!=count($array2)) || (count($array1)==0) || (count($array2)==0)){
    //         return "No son iguales";
    //     }else {
    //         if($array1[0]==$array2[0]){
    //             array_shift($array1);
    //             array_shift($array2);
    //             $chivato=1;
    //             arrayIgual($array1, $array2);
    //         }

    //     }

    //     if(($chivato ==1) && (count($array1)==0) && (count($array2)==0)){
    //         echo "Los arrays son iguales";
    //     }


    // }

    // $mensaje =arrayIgual($array1, $array2);
    // echo $mensaje;


    function arrayIgual($array1, $array2)
    {
        if ($array1 == null) {
            return "son iguales";
        } else if ((count($array1) != count($array2))) {
            return "No son iguales";
        } else if ($array1[0] == $array2[0]) {
            array_shift($array1);
            array_shift($array2);
            return arrayIgual($array1, $array2);
        }
    }


    echo arrayIgual($array1, $array2);


    ?>

    <h1>Posiciones</h1>

    <?php

    $array1 = [0, 2, 2];




    function posicion($array1)
    {


        if ($array1 != null) {
            $valor = $array1[count($array1) - 1];
            $pos = count($array1) - 1;
        }

        if ($array1 == null) {
            return "Ningun valor coincide con su posicion";
        }

        if ($valor == ($pos)) {
            array_pop($array1);
            echo "El valor " . $valor . " coinicide con su posicion";
            echo "<br>";
            posicion($array1);
        } else {
            array_pop($array1);
            return posicion($array1);
        }
    }

    echo posicion($array1);

    ?>

    <h1>Imprimir array</h1>

    <?php

    $array = [[0, 2, 2], [0, 1, 4], [5, 2, 1]];

    // echo $array [0][1];

    function recorrerMatriz($array, $fila, $columna)
    {

        //para sacar el valor de la longitud del array de dentrom osea la longitud de la columna
        foreach ($array as $value) {
            $countColumna = count($value) - 1;
        }


        //$countColumna = count($array[$fila])-1


        if ($fila < 0) {

            return "";
        } else if ($fila >= 0 && $columna >= 0) {

            echo $array[(count($array) - 1) - $fila][$countColumna - $columna];

            return recorrerMatriz($array, $fila, ($columna - 1));

            //  print_r($array[(count($array)-1)-$fila]) ;

        } else {

            echo "<br>";
            $columna =  $countColumna;
            return  recorrerMatriz($array, $fila - 1, $columna);
        }
    }

    echo recorrerMatriz($array, 2, 2)




    ?>

    <h1>Numero en el array con funciones</h1>

    <?php

    $array1 = [0, 2, 5];
    $numero = 5;



    function numeroArray($array1, $numero)
    {

        if ($array1 == null) {
            return "El numero no esta en el array";
        }

        if ($array1[0] == $numero) {
            return "El numero esta en el array";
        } else {

            array_shift($array1);
            return  numeroArray($array1, $numero);
        }
    }

    echo numeroArray($array1, $numero);

    ?>

<h1>Numero en el array sin funciones</h1>

<?php

$array1 = [0, 2, 5];
$numero = 6;



function numeroArray1($array1, $numero)
{
    static $pos =0;
    if($pos == count($array1)){
        return "El numero no esta en el array";
    }else {
        if($array1[$pos]==$numero){
            return "El numero esta en el array";

        }else {
            $pos++;
            return numeroArray1($array1,$numero);
        }
    }

}

echo numeroArray1($array1, $numero);

?>


</body>

</html>