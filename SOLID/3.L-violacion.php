<?php
#violando el principio sustitucion de Liskov

abstract class Teacher {
    public $name;

    public function assignSchedule($schedule) {
        // code..
    }
}

class Academia{

}

class GuestTeacher extends Teacher {

    public function assignSchedule($schedule) {
        //el uso de excepciones en tu codigo
        throw new Exception("Los profesores invitados no tienen horarios fijos.");
    }
}