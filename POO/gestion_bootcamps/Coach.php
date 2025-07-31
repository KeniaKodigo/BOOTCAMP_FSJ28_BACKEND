<?php

class Coach{
    public string $nombre;
    public string $correo;
    public array $tecnologias;

    //constructor parametrizados
    public function __construct($nombre, $correo, $tecnologias)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->tecnologias = $tecnologias;
    }
}

#instancia => copia, objeto (crear un objeto)
//$coach1 = new Coach();