<?php

class PokerDice 
{
    private $caras = ['As', 'K', 'Q', 'J', '7', '8'];
    private $caraActual;
    private static $totalTiradas = 0;

    public function __construct()
    {
        $this->caraActual = null;
    }

    public function tirar() {
        $indiceAleatorio = array_rand($this->caras);
        $this->caraActual = $this->caras[$indiceAleatorio];
        self::$totalTiradas++;
        return $this->caraActual;
    }

    public function verUltimoTiro() {
        if ($this->caraActual === null) {
            return "No tirado";
        }
        return $this->caraActual;
    }

    // Metodo estatico para ver el total de tiradas
    public static function verTotalTiradas() {
        return self::$totalTiradas;
    }
}