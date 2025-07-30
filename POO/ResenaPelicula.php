<?php

#Resena de Pelicula: atributos, metodos
class ResenaPelicula{
    //modificadores de acceso: public, private, protected, default
    public float $puntaje;
    public string $titulo;
    public string $categoria;
    public string $genero;
    public string $duracion;
    public string $comentario;


    //creando un constructor
    public function __construct($titulo, $puntaje, $comentario)
    {
        //declarando un objeto estatico (por defecto)
        $this->titulo = $titulo;
        $this->puntaje = $puntaje;
        $this->comentario = $comentario;
    }

    //this -> una referencia de lo que hay dentro de la clase (atributos, metodos)
    public function mostrarResumen(){
        echo "Pelicula: {$this->titulo}<br>";
        $this->saludar();
    }

    public function saludar(){
        //code..
    }

    //constructor() -> INICIALIZAR UN OBJETO ()
}

#creando una instancia
$resena1 = new ResenaPelicula("Payaso IT",9.1,"Chicos adolescentes aterrorizados por un payaso");
print_r($resena1);
echo "<br>";
// $resena1->titulo = "Rapido y Furiosos";
// $resena1->puntaje = 8.0;
// $resena1->comentario = "La pelicula es de accion";
$resena1->mostrarResumen();
print_r($resena1);

