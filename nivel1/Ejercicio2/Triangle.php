<?php

require_once 'Shape.php';

class Triangulo extends Shape
{
    public function calcularArea(): float
    {
        return ($this->getBase() * $this->getAltura()) / 2;
    }
}

?>