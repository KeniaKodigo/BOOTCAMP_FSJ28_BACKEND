<?php

#protected (herencia) / private (dentro de la clase)
//sirven para crear objetos
class Estudiante{
    public string $nombre;
    private string $carnet;
    private bool $esEmpleado;
    //metodo get(obtener) y set(realizar cambios)
    public string $correo;
    public string $estado_academico;

    public function __construct($nombre, $carnet, $empleado, $correo, $estado)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
        $this->esEmpleado = $empleado;
        $this->correo = $correo;
        $this->estado_academico = $estado;
    }

    public function verPerfil(){
        //code..
    }

    public function getCarnet(){
        return $this->carnet;
    }

    public function setCarnet($carnet){
        $this->carnet = $carnet;
    }

    public function getEsEmpleado(){
        return $this->esEmpleado;
    }

    public function setEsEmpleado($empleado){
        $this->esEmpleado = $empleado;
    }
}

// $juanito = new Estudiante("juan perez", "JP2025", false, "juan.perez@gmail.com", "estudiante");
// #$juanito->nombre = "heriberto chacon";
// print_r($juanito);
// echo "<br>";
// echo "Carnet de Juanito: " . $juanito->getCarnet();
// $juanito->setCarnet("JP002026");
// echo "<br>";
// echo "Actualizando el Carnet de Juanito: " . $juanito->getCarnet();
#echo $juanito->carnet;

class INCAF extends Estudiante{

    public function saludar(){
        #echo "Bienvenido {$this->nombre}";
    }
}