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

    //Mostramos las cookies del plato 1

    if (isset($_COOKIE['c_plato1'])) {
        echo "<br>";
        echo "El primer plato es " .   $_COOKIE['c_plato1'];
        echo "<br>";

    }

    //Mostramos las cookies del plato 2

    
    if (isset($_COOKIE['c_plato2'])) {
        echo "El segundo plato es " .   $_COOKIE['c_plato2'];
        echo "<br>";

    }


    

    //Guardamos la cookie que se selecciona en postre.

    if (($_REQUEST) && ($_REQUEST['postre']) != "") {

        $postre = $_REQUEST["postre"];
        echo "El postre es " .   $postre ;
        setcookie('c_postre', $postre, time() + 3600);

    }else if (isset($_COOKIE['c_postre'])) {
     
        echo "El postre es " .   $_COOKIE['c_postre'];
        echo "<br>";

    } else {
  
        echo "No has seleccionado ningun postre";
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

</form>

<a href="./cookies1.php">Primer plato</a>
<a href="./cookies2.php">Segundo Plato</a>
<a href="./cookies4.php">Finalizar</a>
    
</body>
</html>