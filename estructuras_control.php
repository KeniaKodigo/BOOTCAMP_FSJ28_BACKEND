<?php

//estructuras condicionales: if-else, switch, operador ternario, if-else if-else

#if-else
function votar($edad){
    //$edad = 10;
    if($edad >= 18){
        echo "Puedes votar, sos mayor de edad<br>";
    }else{
        echo "No puedes votar<br>";
    }
}
votar(27);
votar(12);

//Declara una variable con el número de horas trabajadas en una semana. Si son más de 40, muestra "Horas extra", si no, "Horas normales". (operador ternario)

function horasTrabajadas($horas){
    echo $horas > 40 ? "Horas extras" : "Horas normales";
}

horasTrabajadas(45);

/**
 * switch
 * if-else if-else (multiples de condiciones)
 */

//calcular la renta en base al salario de El Salvador
//operadores aritmeticos, logicos (AND, OR), comparacion
function calcularRenta($salario){
    if($salario >= 0.01 && $salario <= 472){
        echo "No aplica renta";
    }else if($salario > 472 && $salario <= 895.24){
        echo "Aplica el 10% de renta";
    }else if($salario > 895.24 && $salario <= 2038.10){
        echo "Aplica el 20%";
    }else{
        echo "Aplica el 30%";
    }
}

//switch (dias de la semana => mandar un mensaje)
//break (rompe o se sale del bloque), default
function diasSemana($dia){
    switch($dia){
        case "Lunes":
            return "Hoy es lunes";
            break;

        case "Martes":
            return "Hoy es martes";
            break;

        case "Miercoles":
            return "Hoy es miercoles";
            break;

        default:
            return "Dia de semana incorrecto";
    } 
}       

diasSemana("Lunes");

//estructuras repetitivas: for, while, do while, foreach

function contadorFor(){
    //contador (iniciar el contador), hasta donde va llegar el contador, incrementar/decrementar
    for($i=1; $i <= 10; $i++){
        echo "Contando $i...";
    }
}
echo "<br>";
contadorFor();

//tabla del 3 => bucle for
function tablaDeMultiplicar($numero)
{
    for ($i = 1; $i <= 10; $i++) {
        echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
    }
}

$numero = 3;
echo "Tabla de multiplicar del " . $numero . ":<br>";
echo "<hr>";
tablaDeMultiplicar($numero);

function contadorWhile(){
    //contando del 1 al 10..
    $contador = 1;
    while($contador <= 10){
        echo "Contando con while $contador<br>";
        $contador++;
    }
}

contadorWhile();

//Imprime los números pares del 2 al 10 usando while. 2,4,6,8,10
function imprimirNumerosPares($limite) {
    $numero = 2;
    while ($numero <= $limite) {
        echo "Número par: " . $numero . "<br>";
        $numero += 2;
    }
}

$limitePares = 10;
imprimirNumerosPares($limitePares);

function contadorDoWhile(){
    //decrementando 
    $i = 15;
    do{
        echo "Contando con do while $i <br>";
        $i--;
    }while($i >= 1);
}

contadorDoWhile();