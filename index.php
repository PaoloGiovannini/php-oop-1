<?php

require __DIR__ . '/Models/movie.php';

$harry_potter = new Movie('Harry Potter e la pietra filosofale', '2001', 'fantasy', 'lorem ipsum' );
$guardiani = new Movie('Guardiani della galassia 3', '2023', 'fantasy', 'lorem ipsum lorem' );
$super_mario = new Movie('Super Mario', '2023', 'animazione', 'lorem ipsum lorem' );

echo $harry_potter->getInformazioni();
echo $guardiani->getInformazioni();
echo $super_mario->getInformazioni();