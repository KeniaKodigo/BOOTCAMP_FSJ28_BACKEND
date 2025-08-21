<?php
#violando el princio abierto & cerrado
//abierta a extension y cerrado modificacion (100%)
class Course {
    public $title;

    public function getDuration($level) {
        if ($level === 'básico') {
            return 30;
        } elseif ($level === 'intermedio') {
            return 45;
        } elseif ($level === 'avanzado') {
            return 60;
        } 
    }
}

