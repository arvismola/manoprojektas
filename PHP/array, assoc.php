<?php

$m = [
    'gamintojas' => 'Honda',
    'modelis' => 'Civic',
    'kuras' => 'benzinas',
    'metai' => 2010,
    'kaina' => 2500,
];   // masyvas pagal rakta

echo $m['gamintojas'];
var_dump($m); echo '<br>';

$m ['kaina'] = 3000;    // kad pakeisti
$m['transmisija'] = 'automatas';   // kad dadeti
unset ($m['kuras']);   // kad istrinti
var_dump($m); echo '<br>';
