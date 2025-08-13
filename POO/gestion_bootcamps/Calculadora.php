<?php


class Calculadora{
    public $resultado;

    public function sumar($a, $b){
        $this->resultado = $a + $b;
    }

    public static function restar($a, $b){
        return $a - $b;
    }
}

//instancia
$calculadora = new Calculadora();
$calculadora->sumar(10,20);
$calculadora->resultado = 20;

//evitamos las instancias porque el metodo le pertenece a la clase en si
//uso de datos globales
Calculadora::restar(12,6);

