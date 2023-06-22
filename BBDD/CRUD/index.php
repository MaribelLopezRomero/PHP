<!-- 1.	Script que cargue en un combo los datos de la tabla calzado y permita elegir un calzado de entre los existentes para modificarlo. Cargue los datos del calzado elegido y permita modificarlos. Y lo actualice en la Base de datos -->

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

    //Conectar a la BD 

    $conexion = mysqli_connect("localhost", "root", "", "ropa");

    //Seleccionamos la BBDD
    mysqli_select_db($conexion, "ropa") or die("No se puede seleccionar la BD");

    //Consulta sobre los calzados
    $resultado = mysqli_query($conexion, "select * from calzado");

    /* para detectar errores*/
    if (mysqli_connect_errno()) {
        printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
        exit();
    }

    /* Devuelve el número de filas del resultado */
    $numr = mysqli_num_rows($resultado);
    ?>



    <h1>ROPA</h1>


    <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>

        <label for="calzado">Elige un calzado a modificar de la BBDD</label>
        <select name="calzado" id="calzado">
            <option value="Ninguno Seleccionado" name="calzado"></option>


            <?php
            if ($numr > 0) {
                for ($i = 0; $i < $numr; $i++) {


                    $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

                    $id = $fila['id'];
                    $marca = $fila['marca'];
                    $talla = $fila['talla'];
                    $color = $fila['color'];


                    echo "<option value=" . $id . "> Marca: " . $marca . " Color: " . $color . " Talla: " . $talla . "</option>";
                }
            }
            ?>

        </select>

        <input type="submit" value="Seleccionar">

        <?php

        //Guardamos la sesion que se selecciona del calzado.

        if (($_REQUEST) && ($_REQUEST['calzado']) != "") {

            $calzado = $_REQUEST["calzado"];

            echo "<br>";
            echo "El ID del calzado seleccionado es " .  $calzado;
            echo "<br>";



            $_SESSION['s_calzado'] = $calzado;

            //Recuperar los valores asociados al id

            mysqli_data_seek($resultado, 0);

            for ($i = 0; $i < $numr; $i++) {

                $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

                if ($id = $fila['id'] ==  $_SESSION['s_calzado']) {

                    $_SESSION['s_marca'] = $fila['marca'];
                    $_SESSION['s_talla'] = $fila['talla'];
                    $_SESSION['s_color'] =  $fila['color'];
                    $_SESSION['s_precio'] =  $fila['precio'];
                }
            }


            //Modificar en la base de datos

        ?>

            <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
                <h3>Modificar</h3>

                <label for="id">ID</label>

                <?php

                echo "<input  type='text' name='id' id='id' value =" . $_SESSION['s_calzado'] . ">";

                ?>


                <label for="talla">Talla</label>
                <select name="talla" id="talla">
                    <option value="Ninguno Seleccionado" name="talla"></option>
                    <?php

                    echo "<option selected='true' name='talla'value =" . $_SESSION['s_talla'] . ">". $_SESSION['s_talla']."</option>";

                    ?>

                    <option value="37" name="talla">37</option>
                    <option value="38" name="talla">38</option>
                    <option value="39" name="talla">39</option>
                    <option value="40" name="talla">40</option>
                    <option value="41" name="talla">41</option>
                    <option value="42" name="talla">42</option>

                </select>

                <label for="marca">Marca</label>
                <?php

                echo "<input  type='text' name='marca' id='marca' value =" . $_SESSION['s_marca'] . ">";

                ?>

                <label for="color">Color</label>
                <?php

                echo "<input  type='text' name='color' id='color' value =" . $_SESSION['s_color'] . ">";

                ?>

                <label for="precio">Precio</label>
                <?php

                echo "<input  type='text' name='precio' id='precio' value =" . $_SESSION['s_precio'] . ">";

                ?>

                <input type="submit" value="modificar" name="modificar">


            </form>

        <?php

        }

        // <!-- Segundo form que se llama asi mismo -->


        if (isset($_REQUEST["modificar"])) {

            $id = $_REQUEST["id"];
            $talla = $_REQUEST["talla"];
            $marca = $_REQUEST["marca"];
            $color = $_REQUEST["color"];
            $precio = $_REQUEST["precio"];

            //Update del calzado seleccionado
            $sql = "UPDATE calzado SET talla =" . $talla . ", precio=" . $precio . ", marca= " . $marca . ", color ='" . $color . "' WHERE id=" . $id . "";

            if (mysqli_query($conexion, $sql)) {
                echo "Se ha modificado correctamente";
            } else {
                echo "Error. No se ha podido modificar" . mysqli_error($conexion);
            }

            mysqli_close($conexion);

            echo "<br>";
            echo "El ID del calzado a modificar es " . $id;
            echo "<br>";
            echo "La talla modificada es " .  $talla;
            echo "<br>";
            echo "La marca modificada es " .  $marca;
            echo "<br>";
            echo "El color modificado es " .  $color;
            echo "<br>";
            echo "El precio modificado es " .  $precio;
            echo "<br>";
        }
        ?>








    </form>

    <a href="./pantalon.php">Insertar pantalon</a>
    <a href="./camisetas.php">Camisetas segun tallas</a>
    <a href="./persona.php">Insertar vestimenta</a>
    <a href="./calzado.php">Borrar calzado</a>
   

</body>

</html>

<!-- Para volver a recorrer el cursor ponego sql_data_seek =0 y vuelvo a hacer el for -->

<!-- <input type="submit" name="s_plato1" onClick= "location.href='./cookies2.php'" value="Segundo plato"></input> -->