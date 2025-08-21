<?php
#violando el principio Responsabilidad Unica

class Student {
    public $name;
    public $email;
    public $carnet;

    public function getStudents(){
        //code..
    }
    
    //maneja la informacion de los pagos
    public function registerPayment($amount) {
        //code..
    }

    public function getPayments() {
        //code..
    }
}


#SEPARANDO RESPONSABILIDADES