<?php

require_once 'clasePelicula.php';

class Cine 
{
    private string $nombre;
    private string $poblacion;
    private array $peliculas;

    public function __construct(string $nombre, string $poblacion)
    {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->peliculas = [];
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getPoblacion(): string {
        return $this->poblacion;
    }

    public function agregarPelicula(Pelicula $pelicula): void {
        $this->peliculas[] = $pelicula;
    }

    public function mostrarCatalogo(): string {
        $resultado = "Cine: {$this->nombre} ({$this->poblacion})" . PHP_EOL;

        if(empty($this->peliculas)) {
            echo "No hay peliculas en cartelera en este cine" . PHP_EOL;
            return $resultado;
        }

        foreach($this->peliculas as $pelicula) {
            echo " " . $pelicula->mostrarInformacion() . PHP_EOL;
        }
        return $resultado;
    }

    public function mostrarPeliculaMasLarga(): ?Pelicula {
        if (empty($this->peliculas)) {
            echo "El cine {$this->nombre} no tiene peliculas en cartelera" . PHP_EOL;
            return null;
        }

        $peliculaMasLarga = $this->peliculas[0];

        foreach($this->peliculas as $pelicula) {
            if ($pelicula->getDuracion() > $peliculaMasLarga->getDuracion()) {
                $peliculaMasLarga = $pelicula;
            }
        }
        echo "La pelicula mas larga en {$this->nombre}: " . PHP_EOL;
        $peliculaMasLarga->mostrarInformacion() . PHP_EOL;

        return $peliculaMasLarga;
    }

    public function getPeliculas(): array {
        return $this->peliculas;
    }
}

?>