Escriba un programa que defina una clase Shape con un constructor que reciba el ancho y los parámetros altos. Defina dos subclases; Triángulo y Rectángulo que heredan de Forma y calculan el área respectivamente con un método.

<?php

class Shape{
    public $base;
    public $altura;

    public function __construct(float $base, float $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea(){
        // Este es el metodo que recibirán las subclases que le hereden.
    }
}

class Rectangulo extends Shape {
    public function calcularArea(){
        return $this->base * $this->altura;
    }
}

class Triangulo extends Shape {
    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
        
    }
}

// Ejemplos de uso, crearemos dos figuras geometricas y calcularemos su area.
$rectangulo = new Rectangulo(10, 5);
echo "El area del la figura " . $rectangulo->calcularArea() . PHP_EOL;

$figura2 = new Triangulo("Triangulo", 3, 2);
echo "El area de la figura es: " . $triangulo->calcularArea() . PHP_EOL;

?>