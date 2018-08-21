<?php
/**
Sukurti klase ir metoda - valiutos konverterį į EUR. Funkcijos parametrai: pinigai, valiuta. Turime sąrašą, kuriame yra pinigai (asociatyvinis masyvas): kiekis, valiuta. Padaryti naują masyvą, kuriame yra skaičiai (pinigai paversti i EUR). Išvesti su var_dump.
 */
// 9-tas namu darbu pratimas padarytas su klasemis

class pinigai {
    function konv($kiek, $val) {
        $eur=0;
        switch ($val) {
            case 'usd' : $eur=$kiek / 1.15; break;
            case 'gbp' : $eur=$kiek / 03.89; break;
            case 'lt' : $eur=$kiek / 3.45; break;
            default: $eur= false;
        }
        return $eur;
    }
}

$m = [
    ['val' => 'usd', 'kiek' => 85],
    ['val' => 'gbp', 'kiek' => 55],
    ['val' => 'lt', 'kiek' => 150],
];

$o=new pinigai();
$mm = [];
foreach ($m as $pinigas) {
    $mm[] = $o->konv($pinigas['kiek'], $pinigas['val']);
}
var_dump($mm);
