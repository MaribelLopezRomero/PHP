<?php
header('Content-Type: text/txt; charset=utf-8');


if(isset($_REQUEST['nacimiento']) && isset($_REQUEST['cp']) && isset($_REQUEST['telefono']) ){


    $nacimiento = $_REQUEST['nacimiento'];
    $cp= $_REQUEST['cp'];
    $telefono= $_REQUEST['telefono'];

    $datosCliente= array();

    //Si eres de madrid en funcion del codigo postal 

    //vaciar el array

    if (preg_match("/[28]{1}[0-9]{3}$/",$cp)) {

        $datosCliente['cp']='Eres de Madrid';
      
       } elseif(strlen($cp)!=5 ){
        $datosCliente['cp']='El CP introducido no es valido';
       }else {
        $datosCliente['cp']='No eres de Madrid';
       }

    //Si tu telefono es fijo o no

    //vaciar el array

    if (preg_match("/[91]{1}[0-9]{7}$/",$telefono)) {

        $datosCliente['tel']='Tu telefono es fijo';
      
       } elseif (strlen($telefono)!=9) {
        $datosCliente['tel']='El telefono introducido no es valido';
       }else {
        $datosCliente['tel']='Tu telefono es movil';
       }
    
       $json =json_encode($datosCliente);
    
       echo $json;

}else {

    echo "Introduce algun campo";
}


?>