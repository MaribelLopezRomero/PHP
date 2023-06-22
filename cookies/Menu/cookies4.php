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

    //Mostramos las cookies del plato 1

    if (isset($_COOKIE['c_plato1'])) {
        echo "El primer plato es " .   $_COOKIE['c_plato1'];
        echo "<br>";
    }

    //Mostramos las cookies del plato 2


    if (isset($_COOKIE['c_plato2'])) {
        echo "El segundo plato es " .   $_COOKIE['c_plato2'];
        echo "<br>";
    }

    //Mostramos las cookies del postre

    if (isset($_COOKIE['c_postre'])) {
        echo "El postre es " .   $_COOKIE['c_postre'];
        echo "<br>";
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

<form action="./cookies0.php" method="POST">

<input type="submit" name="principal" value="Principal">
</form>
</body>

</html>