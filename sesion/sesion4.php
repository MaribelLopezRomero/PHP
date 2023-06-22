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
    session_start();

    //Mostramos la sesion del plato 1

    if (isset($_SESSION['s_plato1'])) {
        echo "El primer plato es " .   $_SESSION['s_plato1'];
        echo "<br>";
    }else{
        echo "No has seleccionado primer plato";
        echo "<br>";
    }

    //Mostramos la sesion del plato 2

    if (isset($_SESSION['s_plato2'])) {
        echo "El segundo plato es " .   $_SESSION['s_plato2'];
        echo "<br>";
    }else{
        echo "No has seleccionado segundo plato";
        echo "<br>";
    }

    //Mostramos la sesion del postre

    if (isset($_SESSION['s_postre'])) {
        echo "El postre es " .   $_SESSION['s_postre'];
        echo "<br>";
    }else{
        echo "No has seleccionado postre";
        echo "<br>";
    }

    //Creamos una cookie para guardar los platos durante una semana


    if(!isset($_COOKIE['menu'])){


        echo "cookies creadas";

        if( isset($_SESSION['s_plato1'])){

            setcookie( 'menu[c_plato1]',  $_SESSION['s_plato1'], time() + 3600 * 24 );

        }
      
   

        if( isset($_SESSION['s_plato2'])){
            setcookie(   'menu[c_plato2]',   $_SESSION['s_plato2'], time() + 3600 * 24 );
        }

        if(isset($_SESSION['s_postre'])){

            setcookie(   'menu[c_postre]',  $_SESSION['s_postre'], time() + 3600 * 24 );
        }
     
     
      

   }

   


    ?>

<form action="./sesion0.php" method="POST">

<input type="submit" name="principal" value="Principal">
</form>
</body>

</html>