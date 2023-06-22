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

    //Consulta sobre los personas
    $persona = mysqli_query($conexion, "select * from persona");
    //Consulta sobre los camisetas
    $camiseta = mysqli_query($conexion, "select * from camiseta");
    //Consulta sobre los calzado
    $calzado = mysqli_query($conexion, "select * from calzado");
    //Consulta sobre los panalones
    $pantalon = mysqli_query($conexion, "select * from pantalon");


    /* para detectar errores*/
    if (mysqli_connect_errno()) {
        printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
        exit();
    }

    /* Devuelve el número de filas del resultado */
    $numP = mysqli_num_rows($persona);
    $numC = mysqli_num_rows($camiseta);
    $numCz = mysqli_num_rows($calzado);
    $numPt = mysqli_num_rows($pantalon);

    //Sacar los ID no repetidas de persona

    $arrayIDpersona = [];

    if ($numP > 0) {
        for ($i = 0; $i < $numP; $i++) {
            $fila = mysqli_fetch_array($persona, MYSQLI_ASSOC);
            $id = $fila['id'];

            array_push($arrayIDpersona, $id);
        }
    }


    //Sacar los ID no repetidas de camiseta

    $arrayIDcamiseta = [];

    if ($numC > 0) {
        for ($i = 0; $i < $numC; $i++) {
            $fila = mysqli_fetch_array($camiseta, MYSQLI_ASSOC);
            $id = $fila['id'];

            array_push($arrayIDcamiseta, $id);
        }
    }


    //Sacar los ID no repetidas de calzado

    $arrayIDcalzado = [];

    if ($numCz > 0) {
        for ($i = 0; $i < $numCz; $i++) {
            $fila = mysqli_fetch_array($calzado, MYSQLI_ASSOC);
            $id = $fila['id'];

            array_push($arrayIDcalzado, $id);
        }
    }


    //Sacar los ID no repetidas de pantalon

    $arrayIDpantalon = [];

    if ($numPt > 0) {
        for ($i = 0; $i < $numPt; $i++) {
            $fila = mysqli_fetch_array($pantalon, MYSQLI_ASSOC);
            $id = $fila['id'];

            array_push($arrayIDpantalon, $id);
        }
    }


    ?>

    <!-- FORMULARIO -->

    <h2>Elige modelito</h2>

    <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>


        <label for="persona">Persona</label>
        <select name="persona" id="persona">
            <option value="Ninguno Seleccionado" name="persona"></option>
            <?php


            for ($i = 0; $i < count($arrayIDpersona); $i++) {

                echo " <option value='" . $arrayIDpersona[$i] . "' name='persona'> $arrayIDpersona[$i] </option>";
            }


            ?>

        </select>


        <label for="camiseta">Camiseta</label>
        <select name="camiseta" id="camiseta">
            <option value="Ninguno Seleccionado" name="camiseta"></option>
            <?php


            for ($i = 0; $i < count($arrayIDcamiseta); $i++) {

                echo " <option value='" .  $arrayIDcamiseta[$i] . "' name='camiseta'>  $arrayIDcamiseta[$i] </option>";
            }


            ?>

        </select>

        <label for="calzado">Calzado</label>
        <select name="calzado" id="calzado">
            <option value="Ninguno Seleccionado" name="calzado"></option>

            <?php


            for ($i = 0; $i < count(   $arrayIDcalzado ); $i++) {

                echo " <option value='" .  $arrayIDcalzado[$i] . "' name='calzado'>     $arrayIDcalzado[$i] </option>";
            }


            ?>

        </select>

        <label for="pantalon">Pantalon</label>
        <select name="pantalon" id="pantalon">
            <option value="Ninguno Seleccionado" name="pantalon"></option>

            <?php


            for ($i = 0; $i < count( $arrayIDpantalon); $i++) {

                echo " <option value='" .     $arrayIDpantalon[$i] . "' name='pantalon'>    $arrayIDpantalon[$i] </option>";
            }


            ?>


        </select>



        <input type="submit" value="insertar" name="insertar">

    </form>

    <?php



    if (isset($_REQUEST["insertar"])) {


           $idP = $_REQUEST["persona"];
           $idPt = $_REQUEST["pantalon"];
           $idC = $_REQUEST["camiseta"];
           $idCz = $_REQUEST["calzado"];

           $fecha= date("Y-m-d", time());


           $sql = "INSERT INTO llevar (pers, pantalon, camiseta, calzado, fecha) VALUES (" . $idP . ", " . $idPt . ", " .  $idC. ", " . $idCz. ", '" .  $fecha . "')";

            if ($idP =="Ninguno Seleccionado"|| $idPt =="Ninguno Seleccionado"||   $idC  =="Ninguno Seleccionado"||$idCz=="Ninguno Seleccionado"
            ){
                echo "Por favor seleccione todos los campos";
            }else{
                $resultado = (mysqli_query($conexion, $sql));
                if ($resultado) {
                    echo "Se ha insertado el atuendo correctamente";
                } else {
                    echo "Error. No se ha insertar el atuendo" . mysqli_error($conexion);
                }

                mysqli_close($conexion);

                // $numr = mysqli_num_rows($resultado);

                // if ($numr > 0) {

                //     for ($i = 0; $i < $numr; $i++) {


                //         $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

                //         $id = $fila['id'];
                //         $marca = $fila['marca'];
                //         $talla = $fila['talla'];
                //         $color = $fila['color'];
                //         $precio = $fila['precio'];

                //         echo "<br>";
                //         echo "<b>Camiseta " . $i + 1 . "</b>";
                //         echo "<br>";
                //         echo "id: " . $id;
                //         echo "<br>";
                //         echo "marca: " . $marca;
                //         echo "<br>";
                //         echo "color: " . $color;
                //         echo "<br>";
                //         echo "precio: " . $precio;
                //     }

            // }


            }
    }
    ?>



    <a href="./index.php">Modifica el calzado</a>
    <a href="./camisetas.php">Camisetas segun tallas</a>
    <a href="./pantalon.php">Inserta un pantalon</a>
    <a href="./calzado.php">Borrar calzado</a>




</body>

</html>