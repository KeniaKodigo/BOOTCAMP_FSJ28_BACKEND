<?php
#violando el princio de inversion de dependencia

class Estudiante{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }
}

class Maestro {
    public $nombre;
    public $dui;

    public function __construct($nombre, $dui)
    {
        $this->nombre = $nombre;
        $this->dui = $dui;
    }
}

class GestorInscripcion {
    #el atributo debe de recibir un objeto de tipo Estudiante
    private Estudiante $estudiante;

    #incializar un objeto (Estudiante)
    public function __construct(Estudiante $estudiante) {
        $this->estudiante = $estudiante;

        echo $this->estudiante->nombre; //juanito perez
    }
}

$juanito = new Estudiante("juanito perez","J20025");
$rodrigo = new Estudiante("Rodrigo", "RD2024");

$marvin = new Maestro("Marvin Reyes","05678909-9");

$nueva_inscripcion = new GestorInscripcion($juanito);
$nueva_inscripcion3 = new GestorInscripcion($rodrigo);
// $nueva_inscripcion2 = new GestorInscripcion($marvin);