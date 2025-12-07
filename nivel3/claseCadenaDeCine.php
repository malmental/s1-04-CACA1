<?php

include 'claseCine.php';

class CadenaDeCine 
{
    private array $cines;

    public function __construct()
    {
        $this->cines = [];
    }

    public function agregarCine(Cine $cine): void {
        $this->cines[] = $cine;
    }

    public function mostrarTodosLosCatalogos(): void {
        echo "Catalgos de todos los cines" . PHP_EOL;
        foreach($this->cines as $cine) {
            $cine->mostrarCatalogo();
        }
    }

    public function mostrarPeliculasMasLargasPorCine(): void {
        echo "Peliculas mas largas por cine: " . PHP_EOL;
        foreach($this->cines as $cine) {
            $cine->mostrarPeliculaMasLarga();
        }
    }

    public function buscarPorDirector(string $nombreDirector): void {
        echo "Busquda por director: {$nombreDirector}" . PHP_EOL;

        $peliculasEncontradas = array();
        $peliculasUnicas = array(); // Para evitar duplicados

        // Recorremos todos los cines
        foreach ($this->cines as $cine) {
            $peliculasEncontradas = $cine->getPeliculas();

            // Recorremos las películas de cada cine
            foreach ($peliculasEncontradas as $pelicula) {
                // Comparamos el nombre del director (ignorando mayúsculas/minúsculas)
                if (strcasecmp($pelicula->getDirector(), $nombreDirector) === 0) {
                    $nombrePelicula = $pelicula->getNombre();

                    // Verificamos si ya hemos agregado esta película (para no repetir)
                    if (!isset($peliculasUnicas[$nombrePelicula])) {
                        $peliculasUnicas[$nombrePelicula] = true;
                        echo "  Encontrada en '{$cine->getNombre()}': " . PHP_EOL;
                        echo $pelicula->mostrarInformacion() . PHP_EOL;
                    }
                }
            }
        }
        
        if (empty($peliculasUnicas)) {
             echo "No se encontraron películas del director/a '{$nombreDirector}'" . PHP_EOL;
            }
        }
    }

?>
    
