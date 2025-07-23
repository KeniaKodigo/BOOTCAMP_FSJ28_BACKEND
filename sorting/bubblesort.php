<?php


function bubbleSort($array){

    $swap = 0; //
    //evalua las rondas
    for($i = 0; $i < count($array); $i++){
        //segundo bucle para volver a entrar hacer los intercambios
        for($j = 0; $j < count($array) - 1; $j++){
            //evalues posicion actual vs posicion siguiente
            if($array[$j] > $array[$j + 1]){
                //se hace el intercambio
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;

                $swap++;
            }
        }
    }

    print_r($array);
}

bubbleSort([12,34,2,10,8]);