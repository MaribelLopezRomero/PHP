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


    //  Borramos las cookies 

    if (isset($_REQUEST['principal'])) {

        echo "Cookies borradas";

        setcookie('c_plato1');
        setcookie('c_plato2');
        setcookie('c_postre');
    }

        //VECES QUE CAMBIA DE PAGINA

        if ( isset( $_COOKIE['click'] ) ) {

            setcookie( 'click', $_COOKIE['click'] + 1, time() + 3600 );
            echo "<br>";
            echo 'Numero de click: '.$_COOKIE['click'];
            echo "<br>";
          
        }
        else {
        
            setcookie( 'click', 1, time() + 3600 * 24 );
        }

        setcookie('click');


    ?>

    <a href="./cookies1.php">Ir a elegir menu</a>

</body>

</html>