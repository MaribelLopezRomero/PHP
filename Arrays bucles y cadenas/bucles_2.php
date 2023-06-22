<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Ordenar arrays</h1>

  <?php

  $arrayOriginal = [1, 100000, 30, 31, 29, 2, 4, 20, 7];
  $limite = 40;
  $arrayDesordenado = [];

  //array que contenga los elementos hasta el limite

  $contador = 0;

  for ($x = 0; $x < count($arrayOriginal); $x++) {
    if ($arrayOriginal[$x] < $limite) {
      $arrayDesordenado[$contador] = $arrayOriginal[$x];
      $contador = $contador + 1;
    }
  }

  //Ordenar el array

  echo "<b>El array desordenado es: </b>";
  print_r($arrayDesordenado);

  $aux = 0;

  $seguir = 1;

  while ($seguir) {
    $seguir = 0;
    for ($j = 1; $j < count($arrayDesordenado); $j++) {
      if ($arrayDesordenado[$j - 1] > $arrayDesordenado[$j]) {

        $aux = $arrayDesordenado[$j - 1];
        $arrayDesordenado[$j - 1] = $arrayDesordenado[$j];
        $arrayDesordenado[$j] = $aux;

        $seguir = 1;
      }
    }
  }

  echo "<br>";
  echo "<b>El array ordenado es: </b>";
  print_r($arrayDesordenado);

  ?>

  <h1>Notas</h1>
  <?php
  $arrayNotas = [3, 3, 6, 8, 10, 5, 6, 6, 6, 3, 8, 5, 4, 4, 1, 10];

  $sumaNotas = 0;
  $notaMax = 0;
  $notaMin = $arrayNotas[0];
  $contadorAprobados = 0;
  $contadorSuspensos = 0;

  for ($i = 0; $i < count($arrayNotas); $i++) {

    //suma para la media
    $sumaNotas = $sumaNotas + $arrayNotas[$i];

    //nota maxima
    if ($arrayNotas[$i] > $notaMax) {
      $notaMax = $arrayNotas[$i];
    }

    //nota minima
    if ($arrayNotas[$i] < $notaMin) {
      $notaMin = $arrayNotas[$i];
    }

    //Alumnos que superan la asignatura
    if ($arrayNotas[$i] >= 5) {
      $contadorAprobados++;
    };

    //Alumnos que superan la asignatura
    if ($arrayNotas[$i] < 5) {
      $contadorSuspensos++;
    };
  }

  $media = $sumaNotas / count($arrayNotas);

  echo "La media de los alumnos es : " . $media;
  echo "<br>";
  echo "La nota maxima es  : " .  $notaMax;
  echo "<br>";
  echo "La nota minima es  : " .  $notaMin;
  echo "<br>";
  echo "El numero de aprobados es  : " .  $contadorAprobados;
  echo "<br>";
  echo "La numero de suspensos es   : " .  $contadorSuspensos;
  ?>

  <h1>Numeros repetidos</h1>

  <?php

  $arrayNumeros = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];
  $arrayNumerosSinRepetir = [$arrayNumeros[0]]; //para que contenga un valor valido con el que comparar por primera vez.
  $chivato = 0;

  //Eliminar los repetidos

  foreach ($arrayNumeros as $numero) {
    foreach ($arrayNumerosSinRepetir as $numero2) {
      if ($numero == $numero2) {
        $chivato = 1;
      }
    }

    if ($chivato == 0) {
      array_push($arrayNumerosSinRepetir, $numero);
    }

    $chivato = 0;
  }



  echo "<b>Array con numeros repetidos: </b>";
  print_r($arrayNumeros);

  echo "<br>";
  echo "<br>";
  echo "<br>";

  echo "<b>Array eliminado los numeros repetidos manteniendolos: </b>";

  print_r($arrayNumerosSinRepetir);

  ?>

  <h1>Numeros repetidos eliminandolos</h1>

  <?php

  $arrayNumeros = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24];

  $arrayNumerosSinRepetir = [1];
  $arrayRepetido = [];
  $chivato = 0;

  echo "<b>Array con numeros repetidos: </b>";
  print_r( $arrayNumeros);

  //Eliminar los repetidos y crear un array con ellos

  foreach ($arrayNumeros as $numero) {
    foreach ($arrayNumerosSinRepetir as $numero2) {
      if ($numero == $numero2) {
        $chivato = 1;
      }
    }
    if ($chivato == 0) {
      array_push($arrayNumerosSinRepetir, $numero);
    } else {
      array_push($arrayRepetido, $numero);
    }

    $chivato = 0;
  }


  //Borrar los repetidos

  for ($i = 0; $i < count($arrayNumerosSinRepetir); $i++) {
    foreach ($arrayRepetido as $numero2) {

      if (isset($arrayNumerosSinRepetir[$i])) {
        if ($arrayNumerosSinRepetir[$i] == $numero2) {

          unset($arrayNumerosSinRepetir[$i]);
        }
      }
    }
  }


  echo "<br>";
  echo "<br>";
  echo "<br>";

  echo "<b>Array eliminado los numeros repetidos eliminandolos: </b>";

  print_r($arrayNumerosSinRepetir);

  ?>

</body>

</html>