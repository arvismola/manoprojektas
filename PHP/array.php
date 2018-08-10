<?php

$m = [1,4,5,10,7];
echo $m[0] + $m[2];
echo '<br>';

echo count($m);  // suskaiciuoti masyvo elementu kieki
echo '<br>';

$m[3] = 100;  // kad pakeisti elemento reiksme masyve
var_dump($m);echo '<br>';
$m[5] = 'labas';
$m[] = 'rytas';
var_dump($m);echo '<br>';

array_splice($m,2,1); // kad istrinti elementa is masyvo
var_dump($m);echo '<br>';

