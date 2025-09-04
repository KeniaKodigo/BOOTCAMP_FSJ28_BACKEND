<?php

#interface que va contener las clases que van hacer instanciadas
interface INotificacion{
    public function send($messaje);
}

#clases concretas (productos)
class EmailNotificacion implements INotificacion{

    public function send($messaje)
    {
        echo "Notificacion por email: " . $messaje;
    }
}

class SMSNotificacion implements INotificacion{

    public function send($messaje)
    {
        echo "Notificacion por SMS: " . $messaje;
    }
}

class PushNotificacion implements INotificacion{

    public function send($messaje)
    {
        echo "Notificacion por push: " . $messaje;
    }
}

#creando nuestra fabrica
class NotificacionFactory {

    //metodo estatico
    public static function crearNotificacion($type) : INotificacion  {
        //el codigo va manejar la logica de como instanciar la clase
        //evaluar opciones, casos, opcional
        return match($type){
            'email' => new EmailNotificacion(),
            'sms' => new SMSNotificacion(),
            'push' => new PushNotificacion()
        };

    }
}

$email = NotificacionFactory::crearNotificacion('email');
$email->send('Aplicando el patron Factory');
echo "<br>";
print_r($email);

$sms = NotificacionFactory::crearNotificacion('sms');
print_r($sms);

