<?php

require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Category.php';

$movies = [
    new Movie("l'esorcista", "Film di chissa chi chissa cosa", ['horror', 'other']),
    new Movie("Scary Movie", "Film di chissa chi chissa cosa", ['horror', 'comedy']),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <h1>Lista film preferiti</h1>
    <ul>
        <?php foreach ($movies as $movie) { ?>
        <li>
            <h3><?php echo $movie->name; ?></h3>
            <h4>Durata: <?php $movie->description; ?></h4>
            <ul>
                <?php foreach($movie->categories as $category) { ?>
                    <li>
                        <span><?php echo $category?></span>
                    </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
    </ul>
</body>
</html>

