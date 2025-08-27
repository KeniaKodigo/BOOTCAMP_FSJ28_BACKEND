<?php

#contrato -> metodos abstractos
interface NivelCursoInterface{
    public function getDuration();
}

class NivelBasico implements NivelCursoInterface{

    public function getDuration()
    {
        return 30;
    }
}

class NivelIntermedio implements NivelCursoInterface{

    public function getDuration()
    {
        return 45;
    }
}

class NivelAvanzado implements NivelCursoInterface{

    public function getDuration()
    {
        return 60;
    }
}

class Niveltrainee implements NivelCursoInterface{

    public function getDuration()
    {
        return 20;
    }
}