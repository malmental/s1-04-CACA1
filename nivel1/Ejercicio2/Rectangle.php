<?php

require_once 'Shape.php';

class Rectangulo extends Shape
{
    public function calcularArea(): float
    {
        return $this->getBase() * $this->getAltura();
    }
}

?>