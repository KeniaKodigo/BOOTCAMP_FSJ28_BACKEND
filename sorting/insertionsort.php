<?php


function insertionSort($array){

    for($i = 0; $i < count($array); $i++){
        //i = 4
        $punto_interseccion = $array[$i]; //2, 34, 2, 10, 8
        //posiciones anteriores (decrementando)
        $j = $i - 1; //-1, 0, 1, 2, 3
        //3-2, 3-1, 3-0

        //$array[0] = 2
        while($j >= 0 && $punto_interseccion < $array[$j]){
            //swap
            $array[$j + 1] = $array[$j];
            $array[$j] = $punto_interseccion;
            $j = $j - 1; //0, 1, 2, 1
        }

    }
    print_r($array);
}

insertionSort([2,34,2,10,8]);
//[2,2,34,10,8]
//[2,2,10,34,8]
//[2,2,8,10,34]