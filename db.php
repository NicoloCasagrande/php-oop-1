<?php
require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Category.php';

$fantasy = new Category('fantasy');
$horror = new Category('horror');
$comedy = new Category('comedy');

$movies = [
    new Movie("l'esorcista", "Film di chissa chi chissa cosa", [$horror, $fantasy]),
    new Movie("Scary Movie", "Film di chissa chi chissa cosa", [$comedy, $fantasy]),
];
?>