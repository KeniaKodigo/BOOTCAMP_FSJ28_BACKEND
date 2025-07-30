<?php

class Coach{
    public string $nombre;
    public string $correo;
    public array $tecnologias;

    public function __construct($nombre, $correo, $tecnologias)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->tecnologias = $tecnologias;
    }
}