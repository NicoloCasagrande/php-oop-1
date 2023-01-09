<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Category.php';

$horror = new Category('horror', 'Film che fanno paura');
$comedy = new Category('comedy', 'Film che fanno ridere');

$esorcista_categories = array($horror);
$scaryMovie_categoriers = array($horror, $comedy);

$esorcista = new Movie("l'esorcista", "Film di chissa chi chissa cosa", $esorcista_categories);
$scaryMovie = new Movie("l'esorcista", "Film di chissa chi chissa cosa", $esorcista_categories);

var_dump($esorcista);
var_dump($scaryMovie);
