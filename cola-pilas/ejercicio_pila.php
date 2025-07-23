<?php

# Registro de acciones para deshacer cambios (undo)
// En un editor de texto o formulario, cada cambio del usuario se guarda como una acción. Si el usuario presiona "deshacer", se revierte el último cambio.
# Aplicar Pila

$acciones = [
    ["tipo" => "escribir", "contenido" => "Hola"],
    ["tipo" => "borrar", "contenido" => "a"],
    ["tipo" => "escribir", "contenido" => "mundo"]
];


