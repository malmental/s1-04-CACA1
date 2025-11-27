Crea una clase que representa a un empleado, con atributos a los que se hace referencia en su nombre y usted es. Defina un método que reciba el nombre y el salario como parámetros. Planta un segundo método que imprime el nombre y un mensaje que muestra si pagar o no impuestos (si el salario supera los 6000, paga impuestos).

<?php

class Empleado
{
    // Atributos de la clase.
    public $nombre;
    public $salario;

    // Metodo constructor de la clase.
    public function __construct(string $nombre, float $salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function verificarImpuestos()
    {
        echo "Nombre: " . $this->nombre . PHP_EOL;
        if ($this->salario > 6000) {
            echo "Ustede debe pagar impuestos ya que su salario es mayor a 6000€" . PHP_EOL;
        } else {
            echo "Usted no debe pagar impuestos ya que su salario es menor a 6000€" . PHP_EOL;
        }
    }
}

// Verificacion del ejericio, creamos un nuevo empleado, solo se deberán cambiar los parametros de la clase llamando al metodo verificarImpuestos
$empleado1 = new Empleado("Pedro", 3500);
$empleado1->verificarImpuestos();

$empleado2 = new Empleado("Mario", 9500);
$empleado2->verificarImpuestos()

?>