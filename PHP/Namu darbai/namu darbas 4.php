<?php
/**
Yra indeksinis (paprastas) žmonių masyvas, kur kiekvienas žmogus yra kaip asociatyvinis masyvas: vardas, lytis. Suskaičiuoti kiek vyrų ir kiek moterų. Naudoti foreach.
 */

$masyvas = [
    [
        'vardas' => 'Antanas',
        'lytis' => 'vyras',
    ],
    [
        'vardas' => 'Aldona',
        'lytis' => 'moteris',
    ],
    [
        'vardas' => 'Petras',
        'lytis' => 'vyras',
    ],
    [
        'vardas' => 'Ernesta',
        'lytis' => 'moteris',
    ],
    [
        'vardas' => 'Juozas',
        'lytis' => 'vyras',
    ],
    [
        'vardas' => 'Sandra',
        'lytis' => 'moteris',
    ],
];

$vyrai = 0;
$moterys = 0;
foreach ($masyvas as $tagas) {
    if ($tagas['lytis'] == 'vyras') $vyrai++;
    else $moterys++;
}
echo 'Vyru yra' .' '.  $vyrai; echo '<br>';
echo 'Moteru yra' .' '.  $moterys; echo '<br>';