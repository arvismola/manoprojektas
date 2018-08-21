<?php
/**
Yra svečių sąrašąa. Informacija apie svečią: vardas, lytis, patiekalaa (viskas, vegetaras, veganas). Suskaičiuoti ir išvesti: a) kiek yra moterų ir kiek yra vyrų; b) kiek yra valgančių viska, vegetarų ir veganų.
 */

$m = [
    ['vardas' => 'Kazys', 'lytis'=> 'vyras', 'patiekalai' => 'veganas'],
    ['vardas' => 'Petras', 'lytis'=> 'vyras', 'patiekalai' => 'viskas'],
    ['vardas' => 'Ona', 'lytis'=> 'moteris', 'patiekalai' => 'veganas'],
    ['vardas' => 'Sandra', 'lytis'=> 'moteris', 'patiekalai' => 'viskas'],
    ['vardas' => 'Antanas', 'lytis'=> 'vyras', 'patiekalai' => 'vegetaras'],
    ['vardas' => 'Zose', 'lytis'=> 'moteris', 'patiekalai' => 'vegetaras'],
];

$vyr =0;
$mot =0;

function vm($a) {
    if ($a['lytis'] == 'vyras') {
        return $vyr = + 1;
    } else {
        return $mot = + 1;
    }
}
vm();
echo 'Vyrai: ' .' '. $vyr . '<br>';
echo 'Moterys: ' .' '. $mot . '<br>';
