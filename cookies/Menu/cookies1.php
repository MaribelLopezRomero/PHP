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

    //Guardamos la cookie que se selecciona en plato 1.

    if (($_REQUEST) && ($_REQUEST['plato1']) != "") {

        $plato1 = $_REQUEST["plato1"];
        echo "<br>";
        echo "El primer plato es " .   $plato1 ;
  

        setcookie('c_plato1', $plato1, time() + 3600);

    }else if (isset($_COOKIE['c_plato1'])) {

        echo "<br>";
        echo "El primer plato es " .   $_COOKIE['c_plato1'];

    } else {
        echo "No has seleccionado ningun primer plato";
    }


    //Cookies del segundo plato


        
    if (isset($_COOKIE['c_plato2'])) {

        echo "<br>";
        echo "El segundo plato es " .   $_COOKIE['c_plato2'];
        echo "<br>";

    }

    //Cookies del postre


     if (isset($_COOKIE['c_postre'])) {
        echo "El postre es " .   $_COOKIE['c_postre'];
        echo "<br>";

    }

    //VECES QUE CAMBIA DE PAGINA

    if ( isset( $_COOKIE['click'] ) ) {

        setcookie('click', $_COOKIE['click'] + 1, time() + 3600 );
        echo "<br>";
        echo 'Numero de click: '.$_COOKIE['click'];
      
    }
    else {
    
        setcookie( 'click', 1, time() + 3600 * 24 );
    }


    


    ?>

</form>

<a href="./cookies2.php">Segundo plato</a>
<a href="./cookies3.php">Postre</a>
<a href="./cookies4.php">Finalizar</a>
    
</body>
</html>

<!-- <input type="submit" name="s_plato1" onClick= "location.href='./cookies2.php'" value="Segundo plato"></input> -->