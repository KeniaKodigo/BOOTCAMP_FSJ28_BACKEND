<?php

abstract class Empleado {
    abstract public function aprobarOrden(string $ordenId): void;
}

class EmpleadoAdministrativo extends Empleado {
    public function aprobarOrden(string $ordenId): void {
        echo "Orden $ordenId aprobada por administrativo.";
    }
}

class EmpleadoDocente extends Empleado {
    public function aprobarOrden(string $ordenId): void {
        // 🚫 Problema: un docente no debería aprobar órdenes
        throw new Exception("Un docente no puede aprobar órdenes.");
    }
}
