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

    //Conectar a la BD 

    $conexion = mysqli_connect("localhost", "root", "", "ropa");

    //Seleccionamos la BBDD
    mysqli_select_db($conexion, "ropa") or die("No se puede seleccionar la BD");

    //Consulta sobre los calzado
    $calzado = mysqli_query($conexion, "select * from calzado");

    /* para detectar errores*/
    if (mysqli_connect_errno()) {
        printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
        exit();
    }

    /* Devuelve el número de filas del resultado */
    $numCz = mysqli_num_rows($calzado);


    //Sacar las tallas no repetidas

    $arrayTallasCalzado = [];

    if ($numCz > 0) {
        for ($i = 0; $i <   $numCz; $i++) {
            $fila = mysqli_fetch_array($calzado, MYSQLI_ASSOC);
            $id = $fila['talla'];

            array_push($arrayTallasCalzado, $id);
        }
    }

    $arrayTallasCalzadoNoRepetidas = array_unique($arrayTallasCalzado);

    ?>

    <!-- FORMULARIO -->

    <h2>Borrar calzado</h2>

    <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
        <h3>Selecciona la talla de calzado a eliminar</h3>

        <?php

?>

        <label for="calzado">Talla calzado</label>
        <select name="calzado" id="calzado">
            <option value="Ninguno Seleccionado" name="calzado"></option>
            <?php


            for ($i = 0; $i < count($arrayTallasCalzadoNoRepetidas); $i++) {

                if(isset($arrayTallasCalzadoNoRepetidas[$i])){
                    echo " <option value='" . $arrayTallasCalzadoNoRepetidas[$i] . "' name='calzado'> $arrayTallasCalzadoNoRepetidas[$i]</option>";

                }

              

              
            }


            ?>

        </select>




        <input type="submit" value="borrar" name="borrar">

    </form>

    <?php



    if (isset($_REQUEST["borrar"])) {


        $talla = $_REQUEST["calzado"];


        $sql = "DELETE FROM calzado where talla= " . $talla . "";


        if (
            $talla == "Ninguno Seleccionado"
        ) {
            echo "Por favor seleccione una talla";
        } else {
            $resultado = (mysqli_query($conexion, $sql));
            if ($resultado) {
                echo "Se han borrado los calzados correctamente";
            } else {
                echo "Error. No se podido borrar" . mysqli_error($conexion);
            }

            mysqli_close($conexion);

       

        }
    }
    ?>

    <a href="./index.php">Modifica el calzado</a>
    <a href="./pantalon.php">Inserta un pantalon</a>
    <a href="./camisetas.php">Camisetas segun tallas</a>
    <a href="./persona.php">Insertar vestimenta</a>


</body>

</html>