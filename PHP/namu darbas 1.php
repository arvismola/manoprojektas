<?php
/**
Yra automobilių sąrašas su sekančiomis savybėmis: gamintojas, modelis, metai, kaina. Surūšiuoti sąrašą pagal metus mažėjančia tvarka (naujausias viršuje). Išvesti sąrašą lentele (naudoti foreach).
 */

$masinos = [
    [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'metai' => 2000,
        'kaina' => 1500,
    ],
    [
        'gamintojas' => 'BMW',
        'modelis' => '320i',
        'metai' => 2004,
        'kaina' => 2000,
    ],
    [
        'gamintojas' => 'Audi',
        'modelis' => '100',
        'metai' => 1990,
        'kaina' => 500,
    ],
];

usort($masinos, function($a, $b){      // palyginti kelis elementus masyve
    if ($a['metai'] > $b['metai']) return -1;
    elseif ($a['metai'] < $b['metai']) return 1;
    return 0;
});

echo '<table>';
$i =1;
foreach($masinos as $masina){
    echo '<tr>';
    echo '<td>' .$i++. '.</td>' . '<td>' .$masina['gamintojas']. '</td>' . '<td>' .$masina['modelis']. '</td>' . '<td>' .$masina['metai']. '</td>' . '<td>' .$masina['kaina']. '</td>';
};
echo '</table>'; echo '<br>';

