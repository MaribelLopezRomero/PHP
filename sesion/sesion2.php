<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Menú</h1>


<form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>

    <label for="plato2">Elige el segundo plato</label>
    <select name="plato2" id="plato2">
        <option value="Ninguno Seleccionado" name="plato2"></option>
        <option value="Filete" name="plato2">Filete</option>
        <option value="Verduras" name="plato2">Verduras</option>
        <option value="Sopa" name="plato2">Sopa</option>

    </select>

    <input type="submit" value="Seleccionar">


    <?php

    session_start();

    //Mostramos las sesion del plato 1

    if (isset($_SESSION['s_plato1'])) {
        echo "<br>";
        echo "El primer plato es " .  $_SESSION['s_plato1'];
        echo "<br>";

    }

    //Mostramos la sesion del postre

    if (isset($_SESSION['s_postre'])) {
        echo "El postre es " .   $_SESSION['s_postre'];
        echo "<br>";

    }

    //Guardamos la sesion que se selecciona en plato 2.

    if (($_REQUEST) && ($_REQUEST['plato2']) != "") {

          
        $plato2 = $_REQUEST["plato2"];

        $_SESSION['s_plato2']=$plato2;
        
        echo "El segundo plato es " .  $_SESSION['s_plato2'];

        echo "<br>";

    }else if (isset($_SESSION['s_plato2'])) {
   

        echo "El segundo plato es " .  $_SESSION['s_plato2'];

    } else {

        echo "<br>";
        echo "No has seleccionado ningun segundo plato";
    }



    ?>

<a href="./sesion1.php">Primer plato</a>
<a href="./sesion3.php">Postre</a>
<a href="./sesion4.php">Finalizar pedido</a>

</form>


    
</body>
</html>