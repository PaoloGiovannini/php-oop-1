<?php

require __DIR__ . '/Models/movie.php';


$movies = [
    $harry_potter = new Movie('Harry Potter e la pietra filosofale', '2001', 'fantasy', 'lorem ipsum' ),
    $guardiani = new Movie('Guardiani della galassia 3', '2023', 'fantasy', 'lorem ipsum lorem' ),
    $super_mario = new Movie('Super Mario', '2023', 'animazione', 'lorem ipsum lorem' )
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie class</title>
</head>
<body>
    <main>
        <ul>
            <?php foreach($movies as $movie){
                echo '<li>'. $movie->getInformazioni() . '</li>';
            }
            ?>
        </ul>
    </main>
</body>
</html>