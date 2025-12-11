<?php

require_once 'Triangle.php';
require_once 'Rectangle.php';

$rectangulo = new Rectangulo(10, 5);
$area = $rectangulo->calcularArea();
echo "Área del rectángulo: $area" . PHP_EOL;

$triangulo = new Triangulo(3, 2);
$areaTriangulo = $triangulo->calcularArea();
echo "Área del triángulo: $areaTriangulo" . PHP_EOL;

?>