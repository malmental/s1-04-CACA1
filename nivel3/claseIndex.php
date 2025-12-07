<?php

// Importamos las clases necesarias
require_once 'claseCine.php';
require_once 'clasePelicula.php';
require_once 'claseCadenaDeCine.php';

// Creamos algunas peliculas
$pelicula1 = new Pelicula("El Padrino", 175, "Francis Ford Coppola");
$pelicula2 = new Pelicula("Taxi Driver", 113, "Martin Scorsese");
$pelicula3 = new Pelicula("Cadena Perpetua", 142, "Frank Darabont");
$pelicula4 = new Pelicula("El Gran Lebowski", 117, "Joel Coen");
$pelicula5 = new Pelicula("Pulp Fiction", 154, "Quentin Tarantino");
$pelicula6 = new Pelicula("Casino", 178, "Martin Scorsese");
$pelicula7 = new Pelicula("Mulan", 87, "Tony Bancroft");
$pelicula8 = new Pelicula("El Resplandor", 144, "Stanley Kubrick");
$pelicula9 = new Pelicula("Blade Runner", 117, "Ridley Scott");
$pelicula10 = new Pelicula("Alien", 117, "Ridley Scott");

// Creamos los cines
$cine1 = new Cine("CineMax", "Madrid");
$cine2 = new Cine("Filmoteca", "Barcelona");
$cine3 = new Cine("LuxCine", "Valencia");

// Agregamos peliculas al pimer cine
$cine1->agregarPelicula($pelicula1);
$cine1->agregarPelicula($pelicula2);
$cine1->agregarPelicula($pelicula5);
$cine1->agregarPelicula($pelicula7);

// Agregamos peliculas al segundo cine
$cine2->agregarPelicula($pelicula3);
$cine2->agregarPelicula($pelicula6);
$cine2->agregarPelicula($pelicula8);
$cine2->agregarPelicula($pelicula7);

// Agregamos peliculas al tercer cince
$cine3->agregarPelicula($pelicula9);
$cine3->agregarPelicula($pelicula8);
$cine3->agregarPelicula($pelicula5);
$cine3->agregarPelicula($pelicula4);

// Creamos la cadena de cine
$cadenaDeCine = new CadenaDeCine();
$cadenaDeCine->agregarCine($cine1);
$cadenaDeCine->agregarCine($cine2);
$cadenaDeCine->agregarCine($cine3);

echo "SISTEMA DE GESTION DE CINES" . PHP_EOL;
// Mostramos todos los catalogos
$cadenaDeCine->mostrarTodosLosCatalogos();

// Mostramos la pelicula mas larga x cada cine
$cadenaDeCine->mostrarPeliculasMasLargasPorCine();

?>