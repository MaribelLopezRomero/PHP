<?php
header('Content-Type: text/txt; charset=utf-8');


if(isset($_REQUEST['nombre']) && isset($_REQUEST['telefono']) && isset($_REQUEST['direccion'])  && isset($_REQUEST['productos']) ){


    $nombre = $_REQUEST['nombre'];
    $direccion= $_REQUEST['direccion'];
    $telefono= $_REQUEST['telefono'];
    $productos= $_REQUEST['productos'];

$arrProductos= json_decode($productos);

//Hacer el insert en la base de datos de los productos selecionados


//Conectar a la BD 

$conexion = mysqli_connect("localhost", "root", "", "productos");

//Seleccionamos la BBDD
mysqli_select_db($conexion, "productos") or die("No se puede seleccionar la BD");

foreach ($arrProductos as $productos => $producto ) {

    $sql = "INSERT INTO pedidos (producto, cliente) VALUES (" .  "'".$producto . "' , '" . $nombre . "')";

    $resultado = (mysqli_query($conexion, $sql));
    if ($resultado) {
        $mensaje = "Se ha insertado correctamente";
    } else {

        $mensaje ="Error. No se ha insertado correctamente";
    }

}

echo $mensaje;

    mysqli_close($conexion);

}else {

    echo "Introduce todos los campos";
}
