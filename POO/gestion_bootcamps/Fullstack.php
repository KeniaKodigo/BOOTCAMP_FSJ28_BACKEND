<?php
//Fatal Error
require_once "./Bootcamps.php";


/**
 * composicion, agregacion, asociacion
 */
class BootcampFullstackJr extends Bootcamps implements EvaluacionBootcamps{

    //aplicar polimorfismo => como un metodo puede cambiar el comportamiento

    //sobreescrimos un metodo
    //sobrecargando: cuando llamas al mismo metodo pero agregamos mas parametros y diferentes respuestas
    public function agregarEstudiantes(Estudiante $estudiante) //agregacion
    {
        //cambiar su logica (comportamiento)
        //retornar booleano
    }

    public function obtenerEstudiantes()
    {
        //cambiar el codigo
    }

    public function mostrarDetalle()
    {
        echo "Bootcamp: " . $this->titulo;
    }


    public function evaluar_proyecto()
    {
        //comportamiento
    }

    public function entregar_certificado()
    {
        //comportamiento
    }

}

//Equipo -> Jugador (agregacion) -> clases que pueden coexistir sin necesidad de depender de una de la otra

$oscar = new Coach("Oscar Lemus","oscar@kodigo.org",["base dedatos","javascript"]);

$fullstack1 = new BootcampFullstackJr("Fullstack Junior Incaf", "Desarrollo web",24, $oscar);

$fullstack2 = new BootcampFullstackJr("FullstackJr 20","desarrollo web",24,$oscar);

$edwar = new Estudiante("Edwar","ED2025",false,"edwar@test.com","estudiante");
$arabela = new Estudiante("arabela","ara2025",true,"arabela@test.com","estudiante");
$fullstack1->agregarEstudiantes($edwar);
$fullstack1->agregarEstudiantes($arabela);
//agregar estudiantes al fullstack

BootcampFullstackJr::totalBootcamps();