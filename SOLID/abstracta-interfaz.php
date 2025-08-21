<?php

abstract class Transporte{
    public $placa;

    public abstract function hacerViaje(); //son las hijas

    public function __construct()
    {
        
    }

    public function verPlaca(){
        echo "La placa de este transporte: $this->placa";
    }
}

//contrato
interface TransporteInterface {
    public function hacerViaje();
    public function hacerPlaca();
}

class Microbus extends Transporte{

    public function hacerViaje()
    {
        
    }
}

class Bus implements TransporteInterface{

    public function hacerViaje()
    {
        //code..
    }

    public function hacerPlaca()
    {
        //code..
    }
}