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
    <h1>Sustituir cadenas</h1>

    <?php

    $cadena = "La casa es azul";

    $numeroSustituciones =  sustituirCarateres($cadena, "a", "j");

    echo "<br>";
    echo "Numero de sustituciones " . $numeroSustituciones;


    ?>

    <h1>Numero generado aleatorio</h1>

    <?php
    
     $palabra="repetir";

     echo numeroAleatorio();

    ?>

<h1>Unir string</h1>

<?php

 echo unirTexto("hola", "que tal");
 echo "<br>";
 echo unirTexto("Estoy ", "uniendo", "string");

?>


</body>

</html>