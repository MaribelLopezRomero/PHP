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

    //Mostramos las cookies del plato 1

    if (isset($_COOKIE['c_plato1'])) {
        echo "<br>";
        echo "El primer plato es " .   $_COOKIE['c_plato1'];
        echo "<br>";

    }

    //Mostramos las cookies del postre

    if (isset($_COOKIE['c_postre'])) {
        echo "El postre es " .   $_COOKIE['c_postre'];
        echo "<br>";

    }

    //Guardamos la cookie que se selecciona en plato 2.

    if (($_REQUEST) && ($_REQUEST['plato2']) != "") {

          
        $plato2 = $_REQUEST["plato2"];

        echo "El segundo plato es " .   $plato2 ;

        setcookie('c_plato2', $plato2, time() + 3600);

        echo "<br>";

    }else if (isset($_COOKIE['c_plato2'])) {
   

        echo "El segundo plato es " .   $_COOKIE['c_plato2'];

    } else {

        echo "<br>";
        echo "No has seleccionado ningun segundo plato";
    }


        //VECES QUE CAMBIA DE PAGINA

        if ( isset( $_COOKIE['click'] ) ) {

            setcookie( 'click', $_COOKIE['click'] + 1, time() + 3600 );
            echo "<br>";
            echo 'Numero de click: '.$_COOKIE['click'];
          
        }
        else {
        
            setcookie( 'click', 1, time() + 3600 * 24 );
        }

    ?>

<a href="./cookies1.php">Primer plato</a>
<a href="./cookies3.php">Postre</a>
<a href="./cookies4.php">Finalizar</a>

</form>


    
</body>
</html>