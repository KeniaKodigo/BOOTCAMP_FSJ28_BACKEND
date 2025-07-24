<?php

function quickSort($array){

    if(count($array) > 0){
        //el proceso del quicksort
        $pivote = $array[0];
        $izquierda = [];
        $derecha = [];

        for($i = 1; $i < count($array); $i++){
            //condicionamos donde se va colocar los elementos en base al pivote
            if($array[$i] < $pivote){
                //lo agregamos a la izquierda
                array_push($izquierda, $array[$i]);
            }else{
                array_push($derecha, $array[$i]);
            }
        }

        //fusionamos los arreglos con el pivote
        return array_merge(quickSort($izquierda), array($pivote), quickSort($derecha));
    }else{
        return $array;
    }
}

print_r(quickSort([12,34,2,10,8]));