<?php

//Valor minimo

function valorMinimo($array)
{

    return min($array);
}

//valor maximo

function valorMaximo($array)
{

    return max($array);
}

//Media

function media($array)
{
    $suma = array_sum($array);
    $total = count($array);
    return $suma / $total;
}

//Search

function search($array, $numero)
{
    $pos = array_search($numero, $array);

    if ($pos == false) {
        return "El numero " . $numero . " no esta en el array";
    } else {
        return "El numero " . $numero . " esta en la posicion " . $pos;
    }
}

//BuscarFilaArray

function FilaArray($array, $fila)
{
    return $array[$fila];
}


//BuscarColumnaArray

function columnaArray($array, $columna)
{
    return array_column($array, $columna);
}


//Coordenadas

function coordenadasArray($array, $elemento)
{

    $existe = 0;

    foreach ($array  as $key => $value) {
        foreach ($value as $key1 => $value1) {

            if ($value1 == $elemento) {
                $cordenadaX = $key;
                $cordenadaY = $key1;
                $existe = 1;
            }
        }
    }

    if ($existe == 0) {
        return "El elemento introducido no esta en el array";
    }

    echo "La fila del array donde aparece por primera vez " . $elemento . " es " . implode(",", FilaArray($array, $cordenadaX));

    echo "<br>";

    echo "La columna del array donde aparece por primera vez " . $elemento . " es " . implode(",", columnaArray($array, $cordenadaY));
}

//primo

function primo($numero)
{
    for ($i = 2; $i < $numero; $i++) {

        if (($numero % $i) == 0) {
            return false; //no es primo
        }
    }
    return true; //es primo
}

//primos anteriores


function numerosPrimos($numero)
{

    $array = [];

    for ($i = 2; $i <= $numero; $i++) {

        if (primo($i)) {
            $array[] = $i;
        }
    }

    return $array;
};

//FUNCIONES 2


//sustitutir caracteres

function sustituirCarateres(&$cadena, $cadenaAsustituir = "a", $cadenaSustituta = "--")
{

    $cadena = str_replace($cadenaAsustituir, $cadenaSustituta, $cadena, $count);

    echo "La cadena sustituida es " . $cadena;
    echo "<br>";
    echo "El numero de veces que se sustituye es " . $count;


    if ($count == 0) {
        return 0;
    } else {
        return $count;
    }
}


//Repetir una palabra randon veces

function numeroAleatorio()
{

    global $palabra;

    static $num_veces = 1;

    if ($num_veces == 1) {

        $num_aleatorio = rand(1, 100);
    } else {

        $num_aleatorio = rand($num_veces, ($num_veces + 3));
    }

    $num_veces = $num_aleatorio;


    $palabraRepetida = "";

    for ($i = 0; $i < $num_veces; $i++) {
        $palabraRepetida = $palabraRepetida . $palabra;
    }

    return $palabraRepetida;
}


//numero variable de parametros

function unirTexto()
{
    $num_parametros = func_num_args();
    $array_args = func_get_args();

    $stringUnidos = implode(" ", $array_args);

    return $stringUnidos;
}


//FUNCIONES 3

//funciones variables

function Adecimetros($metros)
{
    $decimetros = $metros * 10;
    return $decimetros;
}

function Acentimetros($metros)
{

    $centimetros = $metros * 100;
    return $centimetros;
}

function Amilimetros($metros)
{

    $milimetros = $metros * 1000;
    return $milimetros;
}

//recursividad

function recursiva($numero)
{

    $arrayNume = str_split($numero);

    if (count($arrayNume) == 0) {
        return 1;
    } else {
        echo $arrayNume[0]; //imprime la primera posicion
        array_shift($arrayNume); //borra la primera posicion
        $numero = implode("", $arrayNume); //pasa de nuevo a string
        echo "<br>";
        recursiva($numero);
    }
}
