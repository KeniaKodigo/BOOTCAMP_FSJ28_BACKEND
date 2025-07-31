<?php

#llamar archivos externos
//require, require_once => manejar errores fatales y el codigo se suspende (es decir que si no sulucionas el error, el codigo ya no avanza) (logica)

//include, include_once => maneja advertencias y solo muestra el error pero el codigo sigue procesando (se recomienda en vistas HTML)

//se llama solamente una vez
require_once './Estudiante.php';
//require './Estudiante.php';

class Bootcamps{
    protected string $titulo;
    protected string $descripcion;
    protected string $temario;
    protected int $duracion;
    protected bool $esGratuito;
    protected float $precio;
    protected array $array_estudiantes = []; //lista de estudiantes que tenga el bootcamp
    //protected Coach $coach;
    protected string $coach;

    public function __construct($titulo, $descripcion, $duracion, $coach)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->duracion = $duracion;
        $this->coach = $coach;
    }

    public function agregarEstudiantes(Estudiante $estudiante){ //objetos de tipo estudiante
        //array_push => agregar elementos al arreglo
        array_push($this->array_estudiantes, $estudiante);
        echo "Agregado a la lista";
    }

    public function obtenerEstudiantes(){
        return $this->array_estudiantes;
    }

}

// $dimas = [
//     "nombre" => "Dimas",
//     "correo" => "dimas.test@example.com",
//     "esEmpleado" => false,
//     "hobbies" => "jugar futbol"
// ];

$dimas = new Estudiante("Dimas","dm2025",false, "dimas.test@example.com", "universitario");
$rodrigo = new Estudiante("Rodrigo","rd2025",false,"rodrigo15@gmail.com","universitario");

$bootcamp = new Bootcamps("Fullstack Jr","Desarrollo Web",24,"Kenia Paiz");
$bootcamp->agregarEstudiantes($dimas);
$bootcamp->agregarEstudiantes($rodrigo);
echo "<br>";
var_dump($bootcamp->obtenerEstudiantes());