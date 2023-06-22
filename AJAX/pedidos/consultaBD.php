
   <?php
   
   session_start();

//Conectar a la BD 

$conexion = mysqli_connect("localhost", "root", "", "ropa");

//Seleccionamos la BBDD
mysqli_select_db($conexion, "productos") or die("No se puede seleccionar la BD");

//Consulta sobre los calzados
$resultado = mysqli_query($conexion, "select * from productos");

/* para detectar errores*/
if (mysqli_connect_errno()) {
    printf("<p>Conexión fallida: %s</p>", mysqli_connect_error());
    exit();
}

/* Devuelve el número de filas del resultado */
$numr = mysqli_num_rows($resultado);

//Array para guardar los productos

$arrayProductos = [];

if ($numr > 0) {
    for ($i = 0; $i < $numr; $i++) {
        $fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $producto = $fila['nombre'];

        array_push($arrayProductos, $producto);
    }
}

$json =json_encode($arrayProductos);

echo $json;