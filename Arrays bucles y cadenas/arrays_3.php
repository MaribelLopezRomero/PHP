<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Palindroma</h1>

    <?php

    $palabra = "casa";


    function palindroma($palabra)
    {

        //pasamos a array
        $arrayPalabra = str_split($palabra);

        //Le damos la vuelta
        $arrayPalabraAlreves = array_reverse($arrayPalabra);

        //pasamos a cadena
        $palabraC = implode("", $arrayPalabra);
        $palabraRevesC = implode("", $arrayPalabraAlreves);

        //las comparamos
        if ($palabraC == $palabraRevesC) {
            echo "La palabra " . $palabra . " es palindroma";
        } else {
            echo "La palabra " . $palabra . " no es palindroma";
        };
    }

    palindroma($palabra)

    ?>


    <h1>Unir arrays eliminando repetidos</h1>

    <?php

    //2.Realizar un script que dados 3 arrays de números, los una eliminando repetidos y muestre por pantalla el valor menor de todos ellos

    $arrayNumero1 = [0, 1, 2, 3];
    $arrayNumero2 = [0, 1, 2, 3, 4, 5, 6];
    $arrayNumero3 = [3, 4, 5, 6, 7, 8, 9, 10, 11];

    //los une
    $arrayMerge = array_merge($arrayNumero1, $arrayNumero2, $arrayNumero3);

    //elimina los repeticos
    $arraySinRepetir = array_unique($arrayMerge);

    //eliminar el menor
    sort($arraySinRepetir);

    $min = array_shift($arraySinRepetir);

    echo "El numero menor eliminado del array es: " . $min;


    ?>

    <h1>Rellenar arrays</h1>

    <?php

    //3. Realizar un script que a partir de un array de letras lo rellene hasta alcanzar los 30 elementos (sí tiene 30 ó más elementos no hace nada), lo rellenará con el mismo número de caracteres por la derecha y por la izquierda (sí falta un número impar de elementos para llegar a 30, incluirá la mitad por la izquierda y la mitad+1 por la derecha). l carácter de relleno será una letra menor que el carácter menor (en ASCII) de todos los elementos por la izquierda y por la derecha un carácter mayor (en ASCII) que todos los elementos del array original.

    $arrayLetras = ["m", "a", "r", "i", "b", "e", "l"];

    $numeroLetras = count($arrayLetras);

    $numeroLetrasAñadir =  30 - $numeroLetras;

    if ($numeroLetrasAñadir % 2 == 0) {
        $numeroLetrasAñadirD = $numeroLetrasAñadir / 2;
        $numeroLetrasAñadirI = $numeroLetrasAñadir / 2;
    } else {

        $numeroLetrasAñadirD = round($numeroLetrasAñadir / 2, 0,  PHP_ROUND_HALF_DOWN) + 1;
        $numeroLetrasAñadirI = round($numeroLetrasAñadir / 2, 0,  PHP_ROUND_HALF_DOWN);
    }


    //sacar el caracter asci de la primera y ultima del array 

    $asci1 = ord($arrayLetras[0]);

    $asci2 = ord($arrayLetras[count($arrayLetras) - 1]);

    //añadir caracteres asci por la derecha

    $asciContador1 = $asci1;
    $asciContador2 = $asci2;


    for ($i = 0; $i < $numeroLetrasAñadirD; $i++) {
        array_push($arrayLetras, chr(($asciContador2 = $asciContador2 + 1)));
    }

    //añadir caracteres asci por la izquierda


    for ($i = 0; $i < $numeroLetrasAñadirI; $i++) {
        array_unshift($arrayLetras, chr(($asciContador1 = $asciContador1 - 1)));
    }


    print_r($arrayLetras);

    echo "<br>";

    echo "Longitude del array: " . count($arrayLetras);



    ?>



    <h1>Mostrar numeros</h1>

    <?php

    /*4.	Realizar un script que dado un array de números y un número devuelva y muestre:
a.	Los elementos del array mayores que el número.
b.	Los 10 elementos del array mayores que el número.
c.	Los 10 elementos del array menores que el número.*/

    $arrayNumero = [-3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21];

    $numero = 8;

    //muestre los mayores que el numero

    sort($arrayNumero);

    $pos = array_search($numero, $arrayNumero);

    $arrayNumMayores = array_slice($arrayNumero, $pos);

    echo "Numeros mayores que " . $numero;
    echo "<br>";
    print_r($arrayNumMayores);
    echo "<br>";

    //Los 10 elementos mayores que el numero

    $arrayNumMayoresHasta10 = array_slice($arrayNumero, $pos, 10 + $pos);

    echo "Los 10 numeros mayores que " . $numero;
    echo "<br>";
    print_r($arrayNumMayoresHasta10);
    echo "<br>";

    //Los 10 elementos del array menores que el número

    $arrayNumMenoresHasta10 = array_slice($arrayNumero, ($pos - 10), $pos);

    echo "Los 10 numeros menores que " . $numero;
    echo "<br>";
    print_r($arrayNumMenoresHasta10);


    ?>

    <h1>Eliminar numeros</h1>

    <?php

    /*5. Realizar un script que dado un array de números y un número
a. Elimine del array todos los números mayores que número y muestre los eliminados.
b. Elimine del array todos los 5 números mayores que número y muestre los eliminados.
c. Elimine del array todos los números menores que número y muestre los eliminados.
d. Sustituya los 5 elementos mayores de un array por los 5 elementos de otro array.
*/

    //eliminar todos los numero mayores de un numero

    $arrayNumero2 = [-3, 2, -1, 0, -2, 5, 7, 4, 9, 6, -8, -4, 1, 10, 12, 15, 14, -7, 1 - 6, 11, 17, 16, 20, 18, -9, 3, 19];
    $numero2 = 10;

    //primero lo ordenamos

    sort($arrayNumero2);

    //posicion
    $pos = array_search($numero2, $arrayNumero2);

    //splice, y guardamos en el array los elementos que se borran

    $numerosAEliminar2 = array_splice($arrayNumero2, $pos);

    echo "Los numeros eliminados mayores del numero " . $numero2 . " son" . implode(",", $numerosAEliminar2);

    //Eliminar los cinco mayores

    $arrayNumero3 = [-3, 2, -1, 0, -2, 5, 7, 4, 9, 6, -8, -4, 1, 10, 12, 15, 14, -7, 1 - 6, 11, 17, 16, 20, 18, -9, 3, 19];


    sort($arrayNumero3);

    $numerosAEliminar3 = array_splice($arrayNumero3, $pos, 5);

    echo "<br>";
    echo "Los cinco numeros eliminados mayores del numero " . $numero2 . " son" . implode(",", $numerosAEliminar3);

    //ELiminar los menores

    $arrayNumero4 = [-3, 2, -1, 0, -2, 5, 7, 4, 9, 6, -8, -4, 1, 10, 12, 15, 14, -7, 1 - 6, 11, 17, 16, 20, 18, -9, 3, 19];

    sort($arrayNumero4);

    $numerosAEliminar4 = array_splice($arrayNumero3, 0, $pos);

    echo "<br>";
    echo "Los numeros menores eliminados menores del numero " . $numero2 . " son" . implode(",", $numerosAEliminar4);

    //Sustituir los 5 elementos mayores de un array por los 5 elementos de otro array.

    $arrayNumero5 = [-3, 2, -1, 0, -2, 5, 7, 4, 9, 6, -8, -4, 1, 10, 12, 15, 14, -7, 1 - 6, 11, 17, 16, 20, 18, -9, 3, 19];

    $otroArray = [100, 100, 100];

    sort($arrayNumero5);

    $numerosAEliminar5 = array_splice($arrayNumero5, (count($arrayNumero5) - 5), count($arrayNumero5), $otroArray);

    echo "<br>";
    echo "Los cinco numeros mayores eliminados del numero " . $numero2 . " y sustituido por otro array son" . implode(",", $numerosAEliminar5);

    echo "<br>";
    echo "Array final: " . implode(",", $arrayNumero5);


    ?>

    <h1>Ordenar cadena de numeros y eliminar</h1>

    <?php

    /*Realizar un script que dada una cadena con números separados por comas lo convierta en un array de los números ordenados y elimine todos los elementos mayores de 100 sí es que existen y los menores de 50 sí es que existen.
*/

    $cadenaNumeros = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,55,56,57,58,59,60,101,76,77,78,79,80";

    $arrayNumeros = explode(",", $cadenaNumeros);

    sort($arrayNumeros);

    print_r($arrayNumeros);
    echo "<br>";

    //Eliminar los menores de 50.

    //bucle para encontrar el indice del primer numero mayor de 50 si no existe 50

    $chivato = false;
    $numero50 = 50;

    while ($chivato == false) {
        $chivato = array_search($numero50, $arrayNumeros);
        $pos50 = array_search($numero50, $arrayNumeros);
        $numero50++;
    }

    //Borramos los que esten por debajp

    array_splice($arrayNumeros, 0, $pos50);

    //ELiminamos los mayores de 100

    //bucle para encontrar el primer numero mayor que 100 si no existe 100

    $chivato = false;
    $numero100 = 100;

    while ($chivato == false) {
        $chivato = array_search($numero100, $arrayNumeros);
        $pos100 = array_search($numero100, $arrayNumeros);
        $numero100++;
    }

    //Borramos los mayores que 100

    array_splice($arrayNumeros, $pos100);

    echo "Los numeros que quedan tras haber ordenado el array, haber eliminado los menores de 50 y los mayores de 100 son: " . implode(",", $arrayNumeros);


    ?>

</body>

</html>