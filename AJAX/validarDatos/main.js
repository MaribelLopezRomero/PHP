const buton = document.querySelector(".buton");

buton.addEventListener("click", mostrarDatos);

function mostrarDatos() {

    let xhttp = new XMLHttpRequest();

    //Form data para recuperar los datos del formulario

    datos = new FormData(document.forms[0]);

    //Array para guardar los datos (name=value) de cada imput y pasarselos por parametro

    let parametros = [];

    //Vemos que datos recoge del formulario
    for (let dato of datos.entries()) {
    
        //Accedemos al nombre y su valor
        let nombreParametro = dato[0];
        let valorParametro = dato[1];

        //objeto para guarda la clave valor de cada input
        let parametro = {};

        parametro[nombreParametro] = valorParametro

        parametros.push(parametro);

    }


    let ruta = "main.php?";

    //Array que contiene tanto objetos name-value como imputs hay

    for (let i = 0; i < parametros.length; i++) {
        const parametro = parametros[i]; //Accedemos al objeto con el par name-value de cada input;

        for (const clave in parametro) {
            ruta = ruta + `${clave}=${parametro[clave]}&`
        }
    }

    xhttp.open("POST", ruta, true);
    //xhttp.send(datos);
    xhttp.send();

    //evento para cuando se establece la conexion
    xhttp.addEventListener("readystatechange", respuestaServidor)


    function respuestaServidor() {

        if (xhttp.readyState == 4 && xhttp.status == 200) {

            //recuperamos los datos del servidor y los guardamos en una variable

            let datosServidor = JSON.parse(xhttp.response);

            //DOM para mostrar los resultados

            const parrafocp = document.querySelector(".cp");
            const parrafotel = document.querySelector(".tel");

            parrafocp.innerHTML = datosServidor.cp;
            parrafotel.innerHTML = datosServidor.tel;


        }
    }


}


