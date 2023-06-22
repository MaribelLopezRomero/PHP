<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
</head>

<body>
    <?php
    if (!isset($_GET["entrar"])) {
    ?>
        <h2>Rellenar datos CV</h2>
        <form method="GET" action=<?php $_SERVER['PHP_SELF'] ?>>

            <!-- <form method="get" action="curriculum.php">> -->

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario">

            <!-- input PASSWORD -->

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">

            <input type="submit" name="entrar" value="Entrar">
        </form>

        <p>**El usuario para entrar es maribel y la contrasela 123</p>
        <?php

    } else {

        $usuario = $_REQUEST["usuario"];
        $contraseña = $_REQUEST["password"];

        if ($usuario == "maribel" && $contraseña == "123") {
            echo "Usuario Valido";


        ?>

            <form method="GET" action="curriculum.php">

                <!-- HIDDEN -->

                <input type="hidden" name="hidden_usuario" value=<?php $usuario ?>>

                <!-- <?php echo $usuario ?> -->

                <input type="submit" value="Ir a rellenar CV">

            </form>
    <?php
        } else {
            echo "Usuario Incorrecto. Vuelve a intentarlo";

            // input BUTTON

            // echo "<input type='button' href='inicio_sesion.php' value ='Volver'>";
        }
    }

    ?>




</body>

</html>