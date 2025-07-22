<?php

#Aplicando una pila

$historal_navegacion = [];

array_push($historal_navegacion, "inicio");
array_push($historal_navegacion, "seccion de productos");
array_push($historal_navegacion, "jeans");
array_push($historal_navegacion, "damas");

print_r($historal_navegacion);

echo "<h3>Eliminando la ultima visita</h3>";
//elimina el ultimo elemento de tu arreglo
echo array_pop($historal_navegacion);

echo "<h3>Historial Actualizado</h3>";
print_r($historal_navegacion);