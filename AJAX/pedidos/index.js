//Cuando se entra en la pagina.
function inicializar() {

    if (document.readyState == 'complete') {

        //Peticion al servidor ConsultaBD para rellenar el select con los productos disponibles en la BBDD

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "consultaBD.php", true);
        xhttp.send(null);


        //evento para cuando se establece la conexion

    xhttp.addEventListener("readystatechange", respuestaServidor)


    function respuestaServidor() {

        if (xhttp.readyState == 4 && xhttp.status == 200) {

            //recuperamos los datos que envia el servidor (los productos) y los guardamos en una variable

             let datosServidor = JSON.parse(xhttp.response);

             console.log(datosServidor);

             //Construimos mediante DOM el checkbox

             const div = document.querySelector(".div");
             let input="";

             for (let i = 0; i < datosServidor.length; i++) {

             input = input + `<input type="checkbox" name="productos[]" value="${datosServidor[i]}">${datosServidor[i]}`

                div.innerHTML = input;
                
             }

        }
    }
}

}

document.addEventListener('readystatechange', inicializar);



//Evento cuando realicemos pedido

const enviar = document.querySelector(".enviar");

enviar.addEventListener("click", realizarPedido);

const productosAEnviarAlServidor = [];

function realizarPedido(ev) {

    ev.preventDefault();

    //Al realizar pedido, recogemos los datos del formulario (productos seleccionados)  para luego mandarselos al PHP CON AJAX
    
   const datosProductos = new FormData(document.forms[0]);

    for (let dato of datosProductos.entries()) {
        productosAEnviarAlServidor.push(dato[1])
 
    }

    //Nos sale el formulario para introducir los datos personales

    const formDatos = document.querySelector(".form1");

    formDatos.classList.add("visible");

    
    //Evento para mandar los datos al servidor

    btnenviar.addEventListener("click", enviarDatosServidor)


}


const btnenviar = document.querySelector(".enviarDatos")

function enviarDatosServidor (evento) {

    evento.preventDefault();

let xhttp = new XMLHttpRequest();

//Form data para recuperar los datos del formulario

const datos = new FormData(document.forms[1]);

datos.append("productos", JSON.stringify(productosAEnviarAlServidor));

for (let dato of datos.entries()) {

   console.log(dato[1]);
}

xhttp.open("POST", "guardar_pedido.php", true);
xhttp.send(datos);


//evento para cuando se establece la conexion
xhttp.addEventListener("readystatechange", respuestaServidor)


function respuestaServidor() {

    if (xhttp.readyState == 4 && xhttp.status == 200) {

        //recuperamos los datos del servidor y los guardamos en una variable

        let datosServidor = xhttp.response;

        //DOM para mostrar los resultados

        const p = document.querySelector(".mensaje")
        p.innerHTML = datosServidor;

       console.log(datosServidor);

    }
}

}


