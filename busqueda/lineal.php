<?php


//Busqueda lineal
function busquedaLineal($array, $numero){
    //iterar arreglo
    for($i=0; $i < count($array); $i++){
        if($array[$i] == $numero){
            return $array[$i];
        }
    }

    //validamos si el numero no se encuentra
    return -1;
}

$resultado = busquedaLineal([12,34,100,23,5], 1000);
if($resultado != -1){
    echo "Numero Encontrado: " . $resultado ;
}else{
    echo "No existe en la lista numerica";
}
