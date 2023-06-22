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

    //Consulta sobre los calzados
    $resultado = mysqli_query($conexion, "select * from camiseta");

    /* para detectar errores*/
    if (mysqli_connect_errno()) {
        printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
        exit();
    }

    /* Devuelve el número de filas del resultado */
    $numr = mysqli_num_rows($resultado);

    //Sacar las tallas no repetidas

    $arrayTallas = [];

    if ($numr > 0) {
        for ($i = 0; $i < $numr; $i++) {
            $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
            $talla = $fila['talla'];

            array_push($arrayTallas, $talla);
        }
    }

    $arrayTallasNoRepetidas = array_unique($arrayTallas);


    ?>

    <h2>Camisetas segun talla</h2>

    <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
        <h3>Selecciona una talla</h3>



        <label for="talla">Talla</label>
        <select name="talla" id="talla">
            <option value="Ninguno Seleccionado" name="talla"></option>
            <?php


            for ($i = 0; $i < count($arrayTallasNoRepetidas); $i++) {

               if(isset($arrayTallasNoRepetidas[$i])
               ) {

                echo " <option value='" . $arrayTallasNoRepetidas[$i] . "' name='talla'> $arrayTallasNoRepetidas[$i] </option>";

               }


            }

  
            ?>

        </select>



        <input type="submit" value="buscar" name="buscar">

    </form>

    <?php



    if (isset($_REQUEST["buscar"])) {


        $talla = $_REQUEST["talla"];


        $sql = "SELECT * FROM camiseta where talla=" . $talla . "";

        if( $talla =="Ninguno Seleccionado"){
            echo "Porfavor seleccione una talla";
        }else{
            $resultado = (mysqli_query($conexion, $sql));
            if ($resultado) {
                echo "Busqueda correcta";
            } else {
                echo "Error. No se ha podido realizar la busqueda" . mysqli_error($conexion);
            }
    
            mysqli_close($conexion);

            $numr = mysqli_num_rows($resultado);

            if ($numr > 0) {
    
                for ($i = 0; $i < $numr; $i++) {
    
    
                    $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    
                    $id = $fila['id'];
                    $marca = $fila['marca'];
                    $talla = $fila['talla'];
                    $color = $fila['color'];
                    $precio = $fila['precio'];
    
                    echo "<br>";
                    echo "<b>Camiseta " . $i + 1 . "</b>";
                    echo "<br>";
                    echo "id: " . $id;
                    echo "<br>";
                    echo "marca: " . $marca;
                    echo "<br>";
                    echo "color: " . $color;
                    echo "<br>";
                    echo "precio: " . $precio;
                }

        }

      
        }
    }
    ?>

    <a href="./index.php">Modifica el calzado</a>
    <a href="./pantalon.php">Inserta un pantalon</a>
    <a href="./persona.php">Insertar vestimenta</a>
    <a href="./calzado.php">Borra un calzado</a>




</body>

</html>