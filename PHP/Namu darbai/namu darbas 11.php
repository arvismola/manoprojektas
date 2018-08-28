<?php
/**
Sukurti funkciją, kuri perduotą į funkciją masyve su tekstais pakeičia visus simbolius į mažąsias raides ir gražina masyvą kaip rezultatą. Pademonstruoti veikimą.
 */

//gal sukurti clase????

$m=['vIEnas', 'Du', 'TrYS', 'KeTUrI', 'PenKi'];

function text($a){
    $b = implode(',', $a);
    $c = strtolower($b);
    $d = explode(',', $c);
    return $d;
}

var_dump(text($m));

//Veikia


/*$s = implode(',', $m);
var_dump($s);
echo '<br>';
$a = strtolower($s);
var_dump($a);
echo '<br>';
$b = explode(',', $a);
echo '<br>';
var_dump($b);
*/

