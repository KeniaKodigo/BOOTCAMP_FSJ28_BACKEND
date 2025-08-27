<?php

interface GestionEstudiante{
    public function registrarEstudiante();
}

interface GestionCurso{
    public function asignarProfesor();
}

interface GestionPagos{
    public function registrarPago();
}

#simulacion de una herencia multiple (PHP)
class Cursos implements GestionEstudiante, GestionCurso{

    public function registrarEstudiante()
    {
        
    }

    public function asignarProfesor()
    {
        
    }
}