<?php

# Aplicando una cola
$clientes = [];

//Agregando elementos a un arreglo (push)
array_push($clientes, "Rodrigo");
array_push($clientes, "Valeria");
array_push($clientes, "Edwin");
array_push($clientes, "Jennifer");

print_r($clientes);

//atendemos al primer cliente 
//pop() -> elimina el ultimo
echo "<h3>Atendiendo al primer cliente</h3>";
echo array_shift($clientes);


echo "<h3>Cliente pendientes en la fila</h3>";
print_r($clientes);

$accomodations = []; //toda la info de los alojamientos de la API

//iterarlo
foreach($accomodations as $item){
    //pensar..
    $item; //[0],[1],[2]....
}

for($i = count($accomodations); $i <= 0; $i--){
    //pila
}