<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Elige tu menu</h1>



    <?php

    if (isset($_REQUEST['principal'])) {


        session_start();

        if(isset($_COOKIE['menu'])) {


        //Recuperamos las cookies de hace una semana y las guardamos en las variables de sesion y lo imprimimos

        echo "<b>El ultimo pedido realizado ha sido: </b>";
        echo "<br>";

        if(isset( $_COOKIE['menu']['c_plato1'])){
            $_SESSION['s_plato1'] =  $_COOKIE['menu']['c_plato1'];
            echo "El primero plato es " .  $_SESSION['s_plato1'];
            echo "<br>";
        }else {
            echo "No habias seleccionado primer plato";
            echo "<br>";
        }

        if(isset( $_COOKIE['menu']['c_plato2'])){
            $_SESSION['s_plato2'] =  $_COOKIE['menu']['c_plato2'];
            echo "El segundo plato es " .  $_SESSION['s_plato2'];
            echo "<br>";
        }else {
            echo "No habias seleccionado segundo plato";
        }

        if(isset($_COOKIE['menu']['c_postre'])){
            $_SESSION['s_postre'] =  $_COOKIE['menu']['c_postre'];
              
        echo "El postre es " .  $_SESSION['s_postre'];
        echo "<br>";
        }else {
            echo "<br>";
            echo "No habias seleccionado postre";
            echo "<br>";
        }

      



        //Borramos las cookies de hace una semana

        setcookie('menu[c_plato1]');
        setcookie('menu[c_plato2]');
        setcookie('menu[c_postre]');

        //Borramos las variables de sesion

        unset(  $_SESSION['s_plato1']);
        unset(  $_SESSION['s_plato2']);
        unset(  $_SESSION['s_postre']);

        }else {

            echo "No habias seleccionado primer plato";
            echo "<br>";
            echo "No habias seleccionado segundo plato";
            echo "<br>";
            echo "No habias seleccionado postre";
            echo "<br>";
    
        }
    
       
   
    }



    ?>

    <a href="./sesion1.php">Ir a elegir menu</a>

</body>

</html>