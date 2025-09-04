<?php

#api externa (consumir)
class OldApis {
    public function fetchUserData(): array {
        $data = file_get_contents('data_old.json');
        $array_data = json_decode($data, true);
        return $array_data; //[]
    }
}

//Instanciamos la API antigua
$oldApi = new OldApis();

//Obtiene los datos del usuario en el formato antiguo
$oldUserData = $oldApi->fetchUserData();

//Transformación manual al formato esperado por el sistema nuevo
$newUserData = [
    'name' => $oldUserData['first_name'] . ' ' . $oldUserData['last_name'],
    'contact' => $oldUserData['phone']
];

echo json_encode($newUserData, true);

#Si necesitaramos obtener datos de usuario en varios lugares, 
#tendrías que repetir la transformación manual 
