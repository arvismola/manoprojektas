<?php
/**
Yra sąrašas darbuotojų, kurių duomenys yra šie: vardas, stazas, atlyginimas, priedas. Paskaičiuoti darbuotojų priedus pagal sekančias taisykles: a) jeigu stazas iki 5 metų, tai priedas 5%, jeigu stazas virš 5 metų, tai priedas 10%, o jeigu stažas virš 10 metų, tai priedas 15%. I6vesti sąrašą su var_dump.
 */

$m = [
    [
        'Vardas' => 'Petras',
        'Stazas' => 5,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
    [
        'Vardas' => 'Antanas',
        'Stazas' => 8,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
    [
        'Vardas' => 'Jonas',
        'Stazas' => 11,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
    [
        'Vardas' => 'Tadas',
        'Stazas' => 3,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
    [
        'Vardas' => 'Mykolas',
        'Stazas' => 2,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
    [
        'Vardas' => 'Arvydas',
        'Stazas' => 12,
        'Atlyginimas' => 1000,
        'Priedas' => 0],
];


for ($i=0; $i<count($m); $i++) {
    if($m[$i]['Stazas']>=10) {
        $m[$i]['Priedas'] = $m[$i]['Atlyginimas'] / 100 * 15;
    }
    elseif($m[$i]['Stazas']<=4) {
        $m[$i]['Priedas'] = $m[$i]['Atlyginimas'] / 100 * 5;
    }
   else {
        $m[$i]['Priedas'] = $m[$i]['Atlyginimas'] / 100 * 10;
    }
}
var_dump($m);