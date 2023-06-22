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

    <label for="plato1">Elige el primer plato</label>
    <select name="plato1" id="plato1">
        <option value="Ninguno Seleccionado" name="plato1"></option>
        <option value="Lentejas" name="plato1">Lentejas</option>
        <option value="Gazpacho" name="plato1">Gazpacho</option>
        <option value="Pizza" name="plato1">Pizza</option>

    </select>

    <input type="submit" value="Seleccionar">


    <?php

    session_start();

    

    //Guardamos la sesion que se selecciona en plato 1.

    if (($_REQUEST) && ($_REQUEST['plato1']) != "") {

        $plato1 = $_REQUEST["plato1"];

        $_SESSION['s_plato1']= $plato1;

        echo"<br>";
        echo "El primer plato es " .   $_SESSION['s_plato1'];

    }else if (isset($_SESSION['s_plato1'])) {

        echo "<br>";
        echo "El primer plato es " .   $_SESSION['s_plato1'];

    } else {
        echo "No has seleccionado ningun primer plato";
    }


    //Sesion del segundo plato

        
    if (isset($_SESSION['s_plato2'])) {

        echo "<br>";
        echo "El segundo plato es " .   $_SESSION['s_plato2'];
        echo "<br>";

    }

    //Sesion del postre


     if (isset($_SESSION['s_postre'])) {
        echo "El postre es " .   $_SESSION['s_postre'];
        echo "<br>";

    }



    ?>

</form>

<a href="./sesion2.php">Segundo plato</a>
<a href="./sesion3.php">Postre</a>
<a href="./sesion4.php">Finalizar pedido</a>
    
</body>
</html>

<!-- <input type="submit" name="s_plato1" onClick= "location.href='./cookies2.php'" value="Segundo plato"></input> -->