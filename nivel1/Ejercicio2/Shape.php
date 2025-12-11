<?php

class Shape
{
    private float $base;
    private float $altura;

    public function __construct(float $base, float $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function getBase(): float
    {
        return $this->base;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function calcularArea()
    {

    }
}

?>