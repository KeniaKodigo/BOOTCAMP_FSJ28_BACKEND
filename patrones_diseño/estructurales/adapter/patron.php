<?php

interface IUserProvider{
    public function getDataUser();
}

//clase que voy adaptar
class OldApis {
    //obtener el usaurio del json
    public function fetchUserData(): array {
        $data = file_get_contents('data_old.json');
        $array_data = json_decode($data, true);
        return $array_data; //[]
    }

    public function fetchProductos(){

    }
}

class UserAdapter implements IUserProvider{

    private OldApis $oldapi; //recibir objeto

    public function __construct(OldApis $oldapi)
    {
        $this->oldapi = $oldapi;
    }

    //adaptar el formato del usuario al sistema nuevo
    public function getDataUser()
    {
        $oldUserData = $this->oldapi->fetchUserData();
        return [
            'name' => $oldUserData['first_name'] . ' ' . $oldUserData['last_name'],
            'contact' => $oldUserData['phone']
        ];
    }

}

//hacer el que adaptador que funcione