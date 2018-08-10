<?php

$m = [1,7,5];
if (in_array(8, $m)) echo '8 yra';
else echo '8 nera';
echo '<br>';                       // patikrina ar yra tai ko ieskome masyve

if (in_array(5, $m)) echo '5 yra';
else echo '5 nera';
echo '<br>';

sort($m);
var_dump($m);   // surusiuoja pagal nrima tvark9 mazas didelis
echo '<br>';
rsort($m);
var_dump($m);   // surusiuoja pagal nrima tvarka m didelis mazas
echo '<br>';

shuffle($m);  // ismaiso
var_dump($m); echo '<br>';

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

usort($masinos, function($a, $b){      // palyginti kelis elementus masyve
    if ($a['kaina'] > $b['kaina']) return 1;
    elseif ($a['kaina'] < $b['kaina']) return -1;
    return 0;
});
var_dump($masinos); echo '<br>';

$m = [1,3,4,1,3];
$x = array_unique($m);    // pasalina dublikatus is masyvo
var_dump($x); echo '<br>';

$m1 = [1,2,3];
$m2 = [5,6,7];
$m3 = [4,8,9];
$m = array_merge($m1, $m2, $m3);   // apjungia kelis masyvus is eiles
var_dump($m); echo '<br>';

$m1 = [1,3,5,7];
$m2 = [0,1,3,9];
$m = array_intersect($m1, $m2);  // pagauna pjuvi kur persidengia 2 vienodi elementai skirtinguose masyvuose
var_dump($m); echo '<br>';

$m1 = [1,3,5,7];
$m2 = [0,1,3,9];
echo array_sum($m); echo '<br>';   // susumuoja

$m = [1,2,3,4,5,6,7,8,9,10];
$x = array_filter($m, function($e){   // filtras masyvui. galima modifikuoti paciam
    if ($e % 2 == 0) return false;
    else return true;
});
var_dump($x); echo '<br>';

$y = array_map(function($e){  // pakeicia masyvo elementu reiksmes (siuo atveju pakelem kvadratu)
    return $e**2;
}, $x);
var_dump($y); echo '<br>';



















