<?php

//Tipos de arreglos

//arreglo indexado => posicion numerica [0]...
$estudiantes = ["Luis","Emmanuel","Rocio","Julio"];
echo $estudiantes[3]; //julio


//arreglo asociativo => claves-valor
//diccionario
$paises = [
    "pais" => "El Salvador",
    "departamentos" => ["San Salvador","San Miguel","San Vicente"],
    "poblacion" => 10000
];

echo $paises["pais"]; //El Salvador
echo $paises["departamentos"][1];
echo "<h3>Iterando un arreglo asociativo</h3>";

//itera arreglo
foreach ($paises as $elemento) {
    if (is_array($elemento)) {
        //implode, explode
        echo implode(', ', $elemento) . "<br>";
        //"San Salvador, San Miguel, San Vicente"
    } else {
        echo  $elemento . "<br>";
        //El Salvador (salto de linea)
        //Poblacion (salto de linea)
    }
}



for($i=0; $i < count($paises); $i++){
    print_r($paises["pais"]);
}

echo "<br>";
//arreglo multidimensional => dentro de un arreglo puede estar otro arreglo y asi sucesivamente
$numeros = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];

echo $numeros[1][2];

$centroamerica = [
    [
        "pais" => "El Salvador",
        "departamentos" => ["San Salvador","San Miguel","San Vicente"],
        "poblacion" => 10000
    ],

    [
        "pais" => "Honduras",
        "departamentos" => ["hola"],
        "poblacion" => 10000
    ],

    [
        "pais" => "Guatemala",
        "departamentos" => ["hola"],
        "poblacion" => 10000
    ]
];

echo "<h3>Multimensional</h3>";
foreach($centroamerica as $pais){
    //print_r($pais); //el arreglo de cada pais
    //imprimir solo el nombre de cada pais
    echo $pais["pais"] . "<br>";

    // foreach($pais["departamentos"] as $departamento){
    //     echo $departamento . "<br>";
    // }
    echo "<br>Departamentos: " . implode(', ', $pais["departamentos"]) . "<br>";
    echo "Poblacion: " . $pais["poblacion"];
}