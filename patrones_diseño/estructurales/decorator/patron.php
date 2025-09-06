<?php

//interfaz que va contener los elementos a decorar
interface ICoffee{
    public function cost();
    public function description();
}

//las clases que voy a decorar (bases)
class SimpleCoffee implements ICoffee{

    public function cost(){
        return 2.50;
    }

    public function description()
    {
        return "Cafe Simple";
    }
}

class AmericanoCoffee implements ICoffee{
    public function cost(){
        return 4.00;
    }

    public function description()
    {
        return "Cafe Americano";
    }
}


//Decorador principal
abstract class CoffeeDecorator implements ICoffee{
    protected ICoffee $coffee;

    public function __construct(ICoffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function cost(){
        //sobreescribiendo el costo del cafe que elijamos
        return $this->coffee->cost(); //4
    }

    public function description()
    {
        return $this->coffee->description(); //cafe americano
    }
}

#decoradores concretos
class MilkDecorator extends CoffeeDecorator{

    public function cost(){
        return $this->coffee->cost() + 0.50;  //4.50
    }

    public function description()
    {
        return $this->coffee->description() . " con leche"; //cafe americano con leche
    }
}

class CarameloDecorator extends CoffeeDecorator{

    public function cost(){
        return $this->coffee->cost() + 1.50;  
    }

    public function description()
    {
        return $this->coffee->description() . " con caramelo"; 
    }
}

echo "PRIMER CAFE <br>";
$cafe1 = new AmericanoCoffee();
echo $cafe1->cost();
echo "<br>";
echo $cafe1->description();

echo "<br>";
//agregar funcionalidades
echo "PRIMER CAFE DECORADO<br>";
$cafe1 = new MilkDecorator($cafe1);
echo $cafe1->cost();
echo "<br>";
echo $cafe1->description();

echo "<br>";
//agregar funcionalidades
echo "PRIMER CAFE DECORADO<br>";
$cafe1 = new CarameloDecorator($cafe1);
echo $cafe1->cost();
echo "<br>";
echo $cafe1->description();