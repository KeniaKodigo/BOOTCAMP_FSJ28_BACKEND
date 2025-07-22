<?php

# Procesamiento de pedidos en una tienda online
// Cada pedido contiene informacion del cliente y los productos. Los pedidos se atienden en orden de llegada, aplicar la estructura de Cola.

$pedidos = [
    [
        "cliente" => "Carlos",
        "productos" => ["Camiseta","Pantalon"]
    ],
    [
        "cliente" => "Laura",
        "productos" => ["Vestido rosa","Blusa"]
    ],
    [
        "cliente" => "Juanito",
        "productos" => ["Gorra","Falda floreada"] //Gorra, Falda floreada
    ],
];

//iterar => bucle, foreach, array_map

echo "<h3>Pedidos Actuales</h3>";
foreach ($pedidos as $pedido) {
    echo "<strong>Cliente:</strong> " . $pedido["cliente"] . "<br>";
    echo "<strong>Lista de Productos:</strong> " . implode(", ", $pedido["productos"]) . "<br><br>";
}
//eliminar elemento
$pedidoProcesado = array_shift($pedidos); //primer arreglo

echo "<h3>Procesando Pedido del Cliente: " . $pedidoProcesado["cliente"] . "</h3>";

echo "<h3>Pedidos Pendientes</h3>";
foreach ($pedidos as $pedido) {
    echo "<strong>Cliente:</strong> " . $pedido["cliente"] . "<br>";
    echo "<strong>Lista de Productos:</strong> " . implode(", ", $pedido["productos"]) . "<br><br>";
}