<?php

#principio LISKOV
abstract class EmpleadoB {
    public $nombre;
    public $apellido;
    public $correo;

    public abstract function verInformacion();
}

interface AprobadorOrdenes {
    public function aprobarOrden(string $ordenId): void;
}

class EmpleadoAdministrativoB extends EmpleadoB implements AprobadorOrdenes {
    public function aprobarOrden(string $ordenId): void {
        echo "Orden $ordenId aprobada por administrativo.";
    }

    public function verInformacion()
    {
        
    }
}

class EmpleadoDocenteB extends EmpleadoB {
    public function verInformacion()
    {
        
    }
}