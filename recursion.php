<?php

#Recursion
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    }
    return $n * factorial($n - 1); //bucle
}

$numero = 5;
$resultado = factorial($numero);
echo "El factorial de $numero es $resultado.";
//n * n + 1
//1*2*3*4*5
//5*4*3*2*1
