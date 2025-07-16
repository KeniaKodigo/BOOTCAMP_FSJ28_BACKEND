<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <h1>INTRODUCCION A PHP</h1>
    <?php 
        //comentario en linea
        # segundo comentario en linea
        /**
         * comentario en bloque
         */

        #declaracion variables y constantes (string, number, booleano, int, float, double, null)

        //PHP es debilmente tipado
        $edad; //indefinida
        $edad = 25;
        $saludo = "Hola! Bienvenido";
        $isEmployee = true;
        $decimal = 3.4;
        //funcion que devuelve el tipo de dato y el valor de la variable
        var_dump($decimal);
        $decimal = "Adios";
        var_dump($decimal);
        $dato = null;

        //constante
        define("PI", 3.1416);
        //imprime los valores
        echo PI;
        echo "Hola con un echo de PHP";
        echo "<h2>Subtitulo desde PHP</h2>";
        const DUI = "06788990";

        //concatenando variables y constantes
        echo "<p>Numero de DUI: " . DUI . "</p>";

        echo "Juanito tiene $edad<br>";
        //comillas simples no concatenan variables (solo es texto)
        echo 'Juanito tiene $edad<br>';

        #Arreglos => una lista de elementos del mismo tipo, posiciones (posicion 0)
        $lista_frutas = ["manzana","uva","mandarina","sandia"];
        //si queremos imprimir el arreglo (para testear) hay 2 formas
        echo "<br>";
        var_dump($lista_frutas);
        echo "<br>";
        print_r($lista_frutas);
        echo "<br>";
        echo $lista_frutas[2];

        //arreglo indexado (numerico)
        $lista_verduras = array("tomate","cebolla","cilantro","zanahoria");

        #Objetos => clave-valor
        //creando un objeto a travez de clase
        class Persona{
            public $nombre;
            public $edad;
        }

        $persona1 = new Persona();
        $persona1->nombre = "Valeria";
        $persona1->edad = 24;

        $persona2 = new Persona();
        $persona2->nombre = "Edwin";
        $persona2->edad = 25;

        $animal = new stdClass();
        $animal->especie = "Perro";
        $animal->raza = "Pastor Aleman";
        $animal->nombre = "Tobby";

        var_dump($animal);

        //objeto lo vas a convertir arreglo asociativo

        /**
         * imprimir datos
         * echo => imprime cadenas 
         * var_dump() => imprime arreglos / objetos (tipo de dato)
         * print_r() => imprime arreglos / objetos 
         */
    ?>
</body>
<script src="./assets/script.js"></script>
<script>
    //declarando un objeto en JS
    let persona = {
        nombre: "Juanito",
        edad: 25,
        color_ojos: "cafes"
    }
</script>
</html>

