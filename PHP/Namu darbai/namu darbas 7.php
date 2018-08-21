<?php
/**
Yra svečių sąrašąs. Informacija apie svečią: vardas, lytis, patiekalaa (viskas, vegetaras, veganas). Suskaičiuoti ir išvesti: a) kiek yra moterų ir kiek yra vyrų; b) kiek yra valgančių viska, vegetarų ir veganų.
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
$viskas=0;
$veget=0;
$vegan=0;

foreach ($m as $zmogus) {
    if ($zmogus['lytis'] == 'vyras') {
        $vyr++;
    }
    else {$mot++; }

}
if ($zmogus['patiekalai'] == 'viskas') {
    $viskas++;
}
elseif ($zmogus['patiekalai'] == 'vegetaras') {
    $veget++;
}
else {$vegan++;}