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

    <h1>Funciones variables</h1>

    <?php

    $metros = 1.64;

    $decimetros = "Adecimetros";

    echo $decimetros($metros);

    echo "<br>";

    $centimetros = "Acentimetros";

    echo $centimetros($metros);
    echo "<br>";

    $milimetros = "Amilimetros";

    echo $milimetros($metros);

    ?>

    <h1>Recursividad</h1>

    <?php

    //recursividad

    echo "<br>";

    $numero = 123;
    echo recursiva($numero);


    ?>
</body>

</html>