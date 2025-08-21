<?php

abstract class Curso{
    public $title;
    public $duration;
    public $cupos;

    public function __construct(){

    }

    public abstract function getDuration();
}

class CursoBasico extends Curso{

    public function getDuration()
    {
        $this->duration = 30;
    }
}

class CursoIntermedio extends Curso{

    public function getDuration()
    {
        $this->duration = 45;
    }
}

class CursoAvanzado extends Curso{

    public function getDuration()
    {
        $this->duration = 60;
    }
}

class CursoTrainee extends Curso{

    public function getDuration()
    {
        $this->duration = 20;
    }
}