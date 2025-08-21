<?php

interface HorarioProfesoresInterface{
    public function asignarHorario($horario);
}

class TeacherFulltime implements HorarioProfesoresInterface{
    
    public function asignarHorario($horario)
    {
        //code..
    }
}

class TeacherByHour implements HorarioProfesoresInterface{

    public function asignarHorario($horario)
    {
        //code..
    }
}

class GuestTeacher {

    public function verificarDisponible(){
        //code..
    }
}