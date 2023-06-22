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

    <label for="postre">Elige el postre</label>
    <select name="postre" id="postre">
        <option value="Ningun postre seleccionado" name="postre"></option>
        <option value="Flan" name="postre">Flan</option>
        <option value="Tarta" name="postre">Tarta</option>
        <option value="Fruta" name="postre">Fruta</option>

    </select>

    <input type="submit" value="Seleccionar">


    <?php

    session_start();

    //Mostramos la sesion del plato 1

    if (isset($_SESSION['s_plato1'])) {
        echo "<br>";
        echo "El primer plato es " .   $_SESSION['s_plato1'];
        echo "<br>";

    }

    //Mostramos la sesion del plato 2

    
    if (isset($_SESSION['s_plato2'])) {
        echo "El segundo plato es " .   $_SESSION['s_plato2'];
        echo "<br>";

    }


    

    //Guardamos la sesion que se selecciona en postre.

    if (($_REQUEST) && ($_REQUEST['postre']) != "") {

        $postre = $_REQUEST["postre"];

        $_SESSION['s_postre']=$postre;

        echo "El postre es " .   $_SESSION['s_postre'];

    }else if (isset($_SESSION['s_postre'])) {
     
        echo "El postre es " .   $_SESSION['s_postre'];
        echo "<br>";

    } else {
  
        echo "No has seleccionado ningun postre";
    }


      
    ?>

</form>

<a href="./sesion1.php">Primer plato</a>
<a href="./sesion2.php">Segundo Plato</a>
<a href="./sesion4.php">Finalizar pedido</a>
    
</body>
</html>