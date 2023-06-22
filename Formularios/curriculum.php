<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .fieldset {

        display: flex;
        flex-direction: column;
    }

    .idiomas {
        display: flex;
        flex-direction: row;
    }

    /* label{
        font-weight: bold;
    } */
</style>

<body>
    <!-- http://mail.cosmewax.com/completacv.php -->


    <h1>Datos del curriculum</h1>

    <?php
    if (!$_REQUEST) {

    ?>

        <form method="POST" action=<?php $_SERVER['PHP_SELF'] ?>>
            <fieldset class="fieldset">

                <legend>Datos personales</legend>

                <!-- nombre -->
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre">

                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido">

                <label for="telefono">Telefono</label>
                <input type="tel" id="telefono" name="telefono">

                <label for="fecha_nacimiento">Fecha nacimiento</label>

                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">

                <!-- sexo RADIO-->
                <div>

                    <label>Sexo</label>
                    <input type="radio" name="sexo" value="mujer" id="mujer">
                    <label for="mujer">Mujer</label>

                    <input type="radio" name="sexo" value="hombre" id="hombre">
                    <label for="hombre">Hombre</label>

                    <input type="radio" name="sexo" value="otro" id="otr">
                    <label for="otro">Otro</label>
                </div>

            </fieldset>



            <fieldset class="fieldset">

                <legend>Datos academicos</legend>

                <!-- nivel educativo SELECT-->
                <label for="nivel_educativo">Nivel educativo</label>
                <select name="datosEducativos[nivel_educativo]" id="nivel_educativo">
                    <option value="sin_estudios" name="datosEducativos[nivel_educativo]" selected>Sin Estudios</option>
                    <option value="ESO" name="datosEducativos[nivel_educativo]">ESO</option>
                    <option value="bachillerato" name="datosEducativos[nivel_educativo]">Bachillerato</option>
                    <option value="fp_gradoMedio" name="datosEducativos[nivel_educativo]">FP Medio</option>
                    <option value="fp_gradoSuperior" name="datosEducativos[nivel_educativo]">FP Superior</option>
                    <option value="diplomatura" name="datosEducativos[nivel_educativo]">Diplomatura</option>
                    <option value="grado" name="datosEducativos[nivel_educativo]">Grado</option>
                    <option value="master" name="datosEducativos[nivel_educativo]">Máster</option>
                    <option value="doctorado" name="datosEducativos[nivel_educativo]">Doctorado</option>
                </select>

                <!-- nivel educativo SELECT MULTIPLES-->
                <label for="estudios">Estudios</label>
                <select name="datosEducativos[estudios]" id="estudios">
                    <option value="sin_estudios" name="datosEducativos[estudios]" selected>Sin Estudios</option>
                    <option value="admin_finanzas" name="datosEducativos[estudios]">Administracion y finanzas</option>
                    <option value="comercial" name="datosEducativos[estudios]">Comercial</option>
                    <option value="operario_fabrica" name="datosEducativos[estudios]">Operario de fabrica o almacen</option>
                    <option value="operario_almacen" name="datosEducativos[estudios]">Operario de almacen</option>
                    <option value="salud" name="datosEducativos[estudios]">Salud</option>
                    <option value="genero" name="datosEducativos[estudios]">Género</option>
                    <option value="psicologia" name="datosEducativos[estudios]">Psicologia</option>
                    <option value="telecomunicaciones" name="datosEducativos[estudios]">IT o Telecomunicaciones</option>
                    <option value="marketing" name="datosEducativos[estudios]">Marketing</option>
                    <option value="ingenieria" name="datosEducativos[estudios]">Ingenieria</option>
                    <option value="matematicas" name="datosEducativos[estudios]">Matematicas</option>
                    <option value="quimica" name="datosEducativos[estudios]">Quimica</option>
                </select>



            </fieldset>



            <fieldset class="fieldset">

                <legend>Competencias</legend>

                <!-- idioma CHECKBOX-->
                <label>Idiomas</label>

                <div class="idiomas">
                    <article>
                        <label for="ingles">Inglés</label>
                        <input type="checkbox" value="ingles" id="ingles" name="idiomas[]">

                    </article>
                    <article>
                        <!-- nivel SELECT -->

                        <label for="nivel_ingles">Nivel Ingles</label>
                        <select name="nivel_ingles" id="nivel_ingles">
                            <option value="A" name="nivel_ingles" selected>A</option>
                            <option value="B1" name="nivel_ingles">B1</option>
                            <option value="B2" name="nivel_ingles">B2</option>
                            <option value="C1" name="nivel_ingles">C1</option>
                            <option value="C2" name="nivel_ingles">C2</option>
                        </select>
                    </article>
                </div>



                <div class="idiomas">

                    <article>

                        <label for="frances">Francés</label>
                        <input type="checkbox" value="frances" id="frances" name="idiomas[]">
                    </article>
                    <article>
                        <!-- nivel SELECT -->

                        <label for="nivel_frances">Nivel Frances</label>
                        <select name="nivel_frances" id="nivel_frances">
                            <option value="A" name="nivel_frances" selected>A</option>
                            <option value="B1" name="nivel_frances">B1</option>
                            <option value="B2" name="nivel_frances">B2</option>
                            <option value="C1" name="nivel_frances">C1</option>
                            <option value="C2" name="nivel_frances">C2</option>
                        </select>
                    </article>
                </div>


                <div class="idiomas">

                    <article>
                        <label for="aleman">Aleman</label>
                        <input type="checkbox" value="aleman" id="aleman" name="idiomas[]">



                    </article>
                    <article>
                        <!-- nivel SELECT -->

                        <label for="nivel_aleman">Nivel Aleman</label>
                        <select name="nivel_aleman" id="nivel_aleman">
                            <option value="A" name="nivel_aleman" selected>A</option>
                            <option value="B1" name="nivel_aleman">B1</option>
                            <option value="B2" name="nivel_aleman">B2</option>
                            <option value="C1" name="nivel_aleman">C1</option>
                            <option value="C2" name="nivel_aleman">C2</option>
                        </select>


                    </article>
                </div>

                <div class="idiomas">

                    <article>

                        <label for="italiano">Italiano</label>
                        <input type="checkbox" value="italiano" id="italiano" name="idiomas[]">

                    </article>
                    <article>


                        <!-- nivel SELECT -->

                        <label for="nivel_italiano">Nivel Italiano</label>
                        <select name="nivel_italiano" id="nivel_italiano">
                            <option value="A" name="nivel_italiano" selected>A</option>
                            <option value="B1" name="nivel_italiano">B1</option>
                            <option value="B2" name="nivel_italiano">B2</option>
                            <option value="C1" name="nivel_italiano">C1</option>
                            <option value="C2" name="nivel_italiano">C2</option>
                        </select>

                    </article>
                </div>


                <div class="idiomas">

                    <article>


                        <label for="japones">Japones</label>

                        <input type="checkbox" value="japones" id="japones" name=idiomas[]>
                    </article>
                    <article>

                        <!-- nivel SELECT -->

                        <label for="nivel_japones">Nivel Japones</label>
                        <select name="nivel_japones" id="nivel_japones">
                            <option value="A" name="nivel_japones" selected>A</option>
                            <option value="B1" name="nivel_japones">B1</option>
                            <option value="B2" name="nivel_japones">B2</option>
                            <option value="C1" name="nivel_japones">C1</option>
                            <option value="C2" name="nivel_japones">C2</option>
                        </select>

                    </article>
                </div>


                <label for="tec">Tecnologias</label>
                <select MULTIPLE name="tec" id="tec">
                    <option name = "tec" value="CSS">CSS</option>
                    <option name = "tec" value="HTML">HTML</option>
                    <option name = "tec" value="JavaScipt">JavaScipt</option>
                    <option name = "tec" value="PHP">PHP</option>
                    <option name = "tec" value="JAVA">JAVA</option>
                    <option name = "tec" value="SQL">SQL</option>
                    <option name = "tec" value=""></option>

                </select>


            </fieldset>

            <fieldset class="fieldset ">
                <legend>Sobre ti</legend>

                <!-- url -->

                <label for="url">Introduce tu enlace a GitHub</label>
                <input type="url" name="url" id="url" placeholder="https://github.com/MaribelLopezRomero" pattern="https://.*" size="30">


                <!-- textarea -->
                <label for="sobre_ti">Sobre ti</label>
                <textarea id="sobre_ti" name="sobre_ti" rows="4" cols="50">
                </textarea>


                <!-- file -->

                <label for="cv">Ajunte su CV en PDF</label>
                <input type="file" id="cv" name="file_cv" accept="archivo.pdf">

                
            <!-- añadir imagen -->

            <label for="file">Ajunte su foto de perfil</label>
            <input type="file" id="file" name="file_cv" accept="imagen.png">

            </fieldset>



            <!-- imagen

            <label for="image"></label>

            <input type="image" id="image" alt="Login" src="/media/examples/login-button.png"> -->

            <!-- submit -->

            <input type="submit" value="Enviar">
            <!-- reset -->
            <input type="reset" value="Resetear datos">


        </form>

    <?php
    } else {

        $nombre = $_REQUEST["nombre"];
        echo "El nombre es " . $nombre;
        echo "<br>";

        $apellido = $_REQUEST["apellido"];
        echo "El apellido es " . $apellido;
        echo "<br>";

        $fecha_nacimiento = $_REQUEST["fecha_nacimiento"];
        echo "La fecha de nacimiento es " . $fecha_nacimiento;
        echo "<br>";

        $sexo = $_REQUEST["sexo"];
        echo "Tu sexo es " . $sexo;
        echo '<br>';

        //Idiomas

        $idiomas = $_REQUEST["idiomas"];
        echo "Tus idiomas son:";
        echo '<br>';

        foreach ($idiomas as $idioma) {
            echo $idioma;
            echo '<br>';
        }

        //Nivel de idiomas

        $nivel_ingles = $_REQUEST["nivel_ingles"];
        echo "Tu nivel de ingles es: ". $nivel_ingles;
        echo '<br>';

        
        $nivel_frances = $_REQUEST["nivel_frances"];
        echo "Tu nivel de frances es: ". $nivel_frances;
        echo '<br>';

        
        $nivel_aleman = $_REQUEST["nivel_aleman"];
        echo "Tu nivel de aleman es: ". $nivel_aleman;
        echo '<br>';

        
        $nivel_italiano = $_REQUEST["nivel_italiano"];
        echo "Tu nivel de italiano es: ". $nivel_italiano;
        echo '<br>';

        
        $nivel_japones = $_REQUEST["nivel_japones"];
        echo "Tu nivel de japones es: ". $nivel_japones;
        echo '<br>';


        //DatosAcademicos en un array

        $datosEducativos = $_REQUEST["datosEducativos"];

        foreach ($datosEducativos   as $clave => $valor) {

            echo "Tu " . $clave . " es " . $valor;
            echo "<br>";
        }

            //Sobre ti 

    $sobre_ti = $_REQUEST["sobre_ti"];
    echo "La informacion sobre ti es: ". $sobre_ti;
    echo '<br>';

    $url = $_REQUEST["url"];
    echo "Tu url de GitHub es". $url;
    echo '<br>';

    $file_cv = $_REQUEST["file_cv"];
    echo "La ruta de tu CV es ". $url;
    echo '<br>';

    }










    ?>
</body>

</html>