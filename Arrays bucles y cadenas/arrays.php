<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ejercicio 1</h1>

    <?php

    $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

    $comidas = array("Lunes" => "Lentejas", "Martes" => "Ternera", "Miercoles" => "Pasta", "Jueves" => "Verduras", "Viernes" => "Pollo", "Sabado" => "Berenjenas Asadas", "Domingo" => "Lubina");

    //print_r($comidas)

    ?>

    <table border="solid 1">
        <tr>
            <th>
                <?php
                echo $dias[0];
                ?>
            </th>
            <th>
                <?php
                echo $dias[1];
                ?>
            </th>
            <th>
                <?php
                echo $dias[2];
                ?>
            </th>
            <th>
                <?php
                echo $dias[3];
                ?>
            </th>
            <th>
                <?php
                echo $dias[4];
                ?>
            </th>
            <th>
                <?php
                echo $dias[5];
                ?>
            </th>
            <th>
                <?php
                echo $dias[6];
                ?>
            </th>
        </tr>
        <tr>
            <td>
                <?php
                echo $comidas[$dias[0]];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Martes"];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Miercoles"];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Jueves"];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Viernes"];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Sabado"];
                ?>
            </td>
            <td>
                <?php
                echo $comidas["Domingo"];
                ?>
            </td>
        </tr>
    </table>


    <h1> Ejercicio 2</h1>

    <?php
    $notasDAW2 = array("Despliegue" => 8, "Desarrollo Cliente" => 10, "Desarrollo Servidor" => 9, "Empresa" => 10, "Ingles" => 8, "Interfaces" => 10);

    print_r($notasDAW2);

    $notasDAW = ["Despliegue" => 8, "Desarrollo Cliente" => "10", "Desarrollo Servidor" => "9", "Empresa" => "10", "Ingles" => "8", "Interfaces" => "10"];

    print_r($notasDAW);
    ?>


    <h1> Ejercicio 3</h1>

    <?php
    $arr1 = array(10, 20, 30, 40);
    print_r($arr1);
    echo "<br>";
    $arr1[] = 5;
    print_r($arr1);
    echo "<br>";
    $arr1[10] = 6;
    $arr1[] = 5;
    print_r($arr1);
    echo "<br>";

    //Lo que pasa es que se salta las posiciones y te pone en la posion del array el valor 6. Y luego al añadir otro en la ultima posicion, lo pone en la 11.


    $arr1[8] = 118;
    print_r($arr1);
    echo "<br>";
    echo $arr1[8];


    ?>

    <h1> Ejercicio 4</h1>

    <?php

    $figura_geometrica = "rectangulo";

    switch ($figura_geometrica) {
        case 'cuadrado':
            echo "Para hallar el perímetro de un " . $figura_geometrica . " hay que conocer la longitud de uno de sus lados y multiplicarla por 4";
            break;
        case 'rectangulo':
            echo "Para hallar el perímetro de un " . $figura_geometrica . " hay que conocer la longitud de uno de sus lados y sumarla";
            break;
        case 'pentagono':
            echo "Para hallar el perímetro de un " . $figura_geometrica . " hay que conocer la longitud de uno de sus lados y multiplicarla por 5";
            break;
        case 'triangulo equilatero':
            echo "Para hallar el perímetro de un " . $figura_geometrica . " hay que conocer la longitud de uno de sus lados y multiplicarla por 3";
            break;
        case 'triangulo isosceles':
            echo "Para hallar el perímetro de un " . $figura_geometrica . " hay que conocer la longitud de uno de sus lados y multiplicarla por 2 sus lados y sumar su base";
            break;

        default:
            echo "No ha introducido una figura geometrica valida";
            break;
    }

    ?>

    <h1> Ejercicio 5</h1>

    <?php

    $operando1 = 2;
    $operando2 = 3;
    $tipoOperacion = "/";

    switch ($tipoOperacion) {
        case '+':
            $operacion = $operando1 + $operando2;
            echo $operacion;
            break;
        case '-':
            $operacion = $operando1 - $operando2;
            echo $operacion;

            break;
        case '*':
            $operacion = $operando1 * $operando2;
            echo $operacion;
            break;
        case '/':
            $operacion = $operando1 / $operando2;
            echo $operacion;
            break;

        default:
            echo "No ha introducido un tipo de operacion valido";
            break;
    }

    ?>

    <h1> Ejercicio 6</h1>

    <?php

    $variableDia = "Domingo";

    switch ($variableDia) {
        case $dias[0]:
            echo "Tu comida de hoy " . $dias[0] . " es " . $comidas[$dias[0]];
            break;
        case $dias[1]:
            echo "Tu comida de hoy " . $dias[1] . " es " . $comidas[$dias[1]];
            break;
        case $dias[2]:
            echo "Tu comida de hoy " . $dias[2] . " es " . $comidas[$dias[2]];
            break;
        case $dias[3]:
            echo "Tu comida de hoy " . $dias[3] . " es " . $comidas[$dias[3]];
            break;
        case $dias[4]:
            echo "Tu comida de hoy " . $dias[4] . " es " . $comidas[$dias[4]];
            break;
        case $dias[5]:
            echo "Tu comida de hoy " . $dias[5] . " es " . $comidas[$dias[5]];
            break;
        case $dias[6]:
            echo "Tu comida de hoy " . $dias[6] . " es " . $comidas[$dias[6]];
            break;

        default:
            echo "No has introducido un dia de la semana valido";
            break;
    }

    echo "<br>";

    ?>

    <h1>Ejercicio 7</h1>

    <?php
    $number = 10;
    $suma = 0;

    for ($x = 1; $x <= $number; $x++) {
        $suma = $suma + $x;
    }

    $media = $suma / $number;

    echo "La media de la suma de los numeros de 1 al " . $number . " es " . $media;
    ?>
</body>

</html>