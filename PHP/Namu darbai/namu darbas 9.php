<?php
/**
Sukurti funkciją - valiutos konverterį į EUR. Funkcijos parametrai: pinigai, valiuta. Turime sąrašą, kuriame yra pinigai (asociatyvinis masyvas): kiekis, valiuta. Padaryti naują masyvą, kuriame yra skaičiai (pinigai paversti i EUR). Išvesti su var_dump.
 */

function p($pin, $val) {
    $eur=0;
    switch ($val) {
        case 'usd' : $eur=$pin/1.15; break;
        case 'gbp' : $eur=$pin/0.89; break;
        case 'lt' : $eur=$pin/3.45; break;
        default : $eur= 'false';
    }
    return $eur;
}

$a= [
    ['kiekis' => 100, 'valiuta' => 'usd'],
    ['kiekis' => 100, 'valiuta' => 'gbp'],
    ['kiekis' => 100, 'valiuta' => 'lt']
];
$b=[];
foreach ($a as $konv) {
    $b[]=p($konv['kiekis'],$konv['valiuta']);
}
var_dump($b);



