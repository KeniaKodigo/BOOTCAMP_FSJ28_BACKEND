<?php

interface GestionAcademica {
    public function registrarEstudiante();
    public function asignarProfesor();
    public function registrarPago();
}

class Curso implements GestionAcademica {
    public function registrarEstudiante() {
        // Código para inscribir estudiante
    }

    public function asignarProfesor() {
        // Código para asignar profesor
    }

    public function registrarPago() {
        // Curso no debería encargarse de pagos
    }
}