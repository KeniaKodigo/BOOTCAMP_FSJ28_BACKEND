<?php

#padre (herencia)
abstract class Curso{
    public $title;
    public $duration;
    public $cupos;
    public $temario;

    public function __construct(){

    }

    public abstract function getDuration();

    public abstract function verTemario();
}

class CursoBasico extends Curso{

    public function getDuration()
    {
        $this->duration = 30;
    }

    public function verTemario()
    {
        //code..
    }
}

class CursoIntermedio extends Curso{

    public function getDuration()
    {
        $this->duration = 45;
    }

    public function verTemario()
    {
        //code..
    }
}

class CursoAvanzado extends Curso{

    public function getDuration()
    {
        $this->duration = 60;
    }

    public function verTemario()
    {
        //code..
    }
}

class CursoTrainee extends Curso{

    public function getDuration()
    {
        $this->duration = 20;
    }

    public function verTemario()
    {
        //code..
    }
}