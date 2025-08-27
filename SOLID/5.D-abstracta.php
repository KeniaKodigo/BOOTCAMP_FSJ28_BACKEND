<?php

#intermediario (abstracion)
abstract class TipoUsuario{
    public $nombre;
    public $telefono;

    public function __construct($nombre, $telefono)
    {
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    public abstract function verPerfil();
}

#definir las clases concretas (tipos Usuarios)
class Estudiante extends TipoUsuario{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }

    public function verPerfil()
    {
        echo "Soy estudiante";
    }
}

class Maestro extends TipoUsuario{
    public $nombre;
    public $dui;

    public function __construct($nombre, $dui)
    {
        $this->nombre = $nombre;
        $this->dui = $dui;
    }

    public function verPerfil()
    {
        echo "Soy maestro";
    }
}

class Director extends TipoUsuario{
    public $nombre;
    public $dui;

    public function __construct($nombre, $dui)
    {
        $this->nombre = $nombre;
        $this->dui = $dui;
    }

    public function verPerfil()
    {
        echo "Soy director";
    }
}

class GestorInscripcionesIngles {
    #el atributo debe de recibir un objeto de tipo UsuarioInterface
    # (Estudiante / Maestro)
    private TipoUsuario $usuario;

    #incializar un objeto (TipoUsuario) -> (Estudiante / Maestro)
    public function __construct(TipoUsuario $usuario) { //todas las clases hijas las puedo utilizar AQUI
        $this->usuario = $usuario;
    }
}

$juanito = new Estudiante("juanito perez","J20025");

$marvin = new Maestro("Marvin Reyes","05678909-9");
$rocio = new Director("Rocio","678909-0");

$nueva_inscripcion = new GestorInscripcionesIngles($juanito);
$nueva_inscripcion2 = new GestorInscripcionesIngles($marvin);
$nueva_inscripcion3 = new GestorInscripcionesIngles($rocio);