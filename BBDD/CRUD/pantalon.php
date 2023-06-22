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
    $resultado = mysqli_query($conexion, "select id from pantalon");

    // para detectar errores
    if (mysqli_connect_errno()) {
        printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
        exit();
    }

    //Devuelve el número de filas del resultado y la siguiente ID a introducir es numero de filas +1
    $numr = mysqli_num_rows($resultado);

    $id = $numr + 1;

    ?>

    <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
        <h3>Insertar Pantalon</h3>


        <label for="id">ID</label>

        <?php
        echo "<input  type='text' name='id' id='id' value =" . $id . ">";
        ?>


        <label for="talla">Talla</label>
        <select name="talla" id="talla">
            <option value="Ninguno Seleccionado" name="talla"></option>
            <option value="37" name="talla">37</option>
            <option value="38" name="talla">38</option>
            <option value="39" name="talla">39</option>
            <option value="40" name="talla">40</option>
            <option value="41" name="talla">41</option>
            <option value="42" name="talla">42</option>
            <option value="43" name="talla">43</option>
            <option value="44" name="talla">44</option>
            <option value="45" name="talla">45</option>
            <option value="46" name="talla">46</option>

        </select>

        <label for="marca">Marca</label>
        <input type="text" name="marca" id="marca">

        <label for="color">Color</label>
        <input type="text" name="color" id="color">

        <label for="precio">Precio</label>
        <input type="text" name="precio" id="precio">

        <input type="submit" value="insertar" name="insertar">

    </form>

    <?php


    if (isset($_REQUEST["insertar"])) {

        $id = $_REQUEST["id"];
        $talla = $_REQUEST["talla"];
        $marca = $_REQUEST["marca"];
        $color = $_REQUEST["color"];
        $precio = $_REQUEST["precio"];

        //Insert del pantalon
        $sql = "INSERT INTO pantalon (id, talla, precio, marca, color) VALUES (" . $id . ", " . $talla . ", " . $precio . ", " . $marca . ", '" . $color . "')";

        if (mysqli_query($conexion, $sql)) {
            echo "Se ha insertado correctamente";
        } else {
            echo "Error. No se ha podido insertar" . mysqli_error($conexion);
        }

        mysqli_close($conexion);

        echo "<br>";
        echo "El ID del pantalon a insertar es " . $id;
        echo "<br>";
        echo "La talla insertar es " .  $talla;
        echo "<br>";
        echo "La marca insertar es " .  $marca;
        echo "<br>";
        echo "El color insertar es " .  $color;
        echo "<br>";
        echo "El precio insertar es " .  $precio;
        echo "<br>";
    }
    ?>

    
    <a href="./index.php">Modifica el calzado</a>
    <a href="./camisetas.php">Camisetas segun tallas</a>
    <a href="./persona.php">Insertar vestimenta</a>
    <a href="./calzado.php">Borrar calzado</a>




</body>

</html>