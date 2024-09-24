<?php
//capturamos la ruta
$array = explode ("/", $_SERVER["REQUEST_URI"]);

/* cuando no se hace ninguma peticion a la API */
if (Count(array_filter($array))==1){
    $json=array(
        "detalle"=>"Sin Solicitudes",
    );
    
        echo json_encode($json, true);
}else{

/* cuanando si se hace peticion a la API */
    if (Count(array_filter($array))==2){
        $json=array(
            "detalle"=>"cual es la solicitud?",
        );

        echo json_encode($json, true);
}
}
