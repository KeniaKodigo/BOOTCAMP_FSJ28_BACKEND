<?php

function busquedaBinaria($array, $numero){
    $inicio = 0;
    $fin = count($array) - 1; //4

    while($inicio <= $fin){
        //[1,2,4,5,10]
        $posicion_enmedio = intval(($inicio + $fin) / 2); //posicion 2

        if($array[$posicion_enmedio] == $numero){
            //si el valor es el elemento de enmedio devuelvo su posicion
            return $posicion_enmedio;
        }

        if($array[$posicion_enmedio] > $numero){
            $fin = $posicion_enmedio - 1;
        }else{
            $inicio = $posicion_enmedio + 1;
        }
    }
}

print_r(busquedaBinaria([1,2,4,5,10], 1));