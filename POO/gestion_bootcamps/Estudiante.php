<?php

class Estudiante{
    private string $nombre;
    public string $carnet;
    public bool $esEmpleado;
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
}

$juanito = new Estudiante("juan perez", "JP2025", false, "juan.perez@gmail.com", "estudiante");
#$juanito->nombre = "heriberto chacon";
print_r($juanito);

class INCAF extends Estudiante{

    public function saludar(){
        #echo "Bienvenido {$this->nombre}";
    }
}