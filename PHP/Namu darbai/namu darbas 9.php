<?php
/**
Sukurti funkciją - valiutos konverterį į EUR. Funkcijos parametrai: pinigai, valiuta. Turime sąrašą, kuriame yra pinigai (asociatyvinis masyvas): kiekis, valiuta. Padaryti naują masyvą, kuriame yra skaičiai (pinigai paversti i EUR). Išvesti su var_dump.
 */

$v = [
    ['valiuta' => 'litai', 'kiekis' => 1],
    ['valiuta' => 'doleriai', 'kiekis' => 1],
    ['valiuta' => 'svarai', 'kiekis' => 1],
    ['valiuta' => 'zlotai', 'kiekis' => 1],
];
$k = ['litai' => 3.4528, 'doleriai' => 1.1420, 'svarai' => 0.8948, 'zlotai' => 4.3037];

function konv ($pinigai, $valiuta) {
    $m = [];
    if ($valiuta == $v['litai'])
}


