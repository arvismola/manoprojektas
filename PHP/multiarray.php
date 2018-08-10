<?php

$x = [
    [1,6,13],
    [8,10,16],
    [77,61,23],
];                           // masyvas masyve

echo $x[1][1]; echo '<br>';

$masinos = [
    [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'kaina' => 1500,
    ],
    [
        'gamintojas' => 'BMW',
        'modelis' => '320i',
        'kaina' => 2000,
    ],
    [
        'gamintojas' => 'Audi',
        'modelis' => '100',
        'kaina' => 500,
    ],
];

var_dump($masinos); echo '<br>';

echo $masinos[1]['kaina']; echo '<br>';


