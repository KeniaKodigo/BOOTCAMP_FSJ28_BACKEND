<?php
#violando el principio sustitucion de Liskov

class Teacher {
    public function assignTime($schedule) {
        // code..
    }
}

class GuestTeacher extends Teacher {

    public function assignSchedule($schedule) {
        //el uso de excepciones en tu codigo
        throw new Exception("Los profesores invitados no tienen horarios fijos.");
    }
}