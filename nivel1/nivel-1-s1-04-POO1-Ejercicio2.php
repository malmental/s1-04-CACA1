<?php

abstract class Shape
{
    public $base;
    public $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    abstract public function calcularArea();
}

class Rectangulo extends Shape 
{
    public function calcularArea()
    {
        return $this->base * $this->altura;
    }
}

class Triangulo extends Shape 
{
    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
}

// Ejemplos de uso, crearemos dos figuras geometricas y calcularemos su area.
$rectangulo = new Rectangulo(10.5, 5.5);
echo "El area del la figura " . $rectangulo->calcularArea() . PHP_EOL;

$figura2 = new Triangulo("Triangulo", 3, 2);
echo "El area de la figura es: " . $triangulo->calcularArea() . PHP_EOL;

?>