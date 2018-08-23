<?php
/**
sukurti klase kurioje yra savybe: masyvas su asmenimis, kur kiekvienas asmuo yra asociatyvinis masyvas : vardas, lytis. Sukurti 2 funkcijas, kurios paskaiciuotu kiek yra vyru ir kiek yra moteru, ir kad grazintu reiksmes
 */

class abc {
    public $m = [
        ['vardas' => 'Petras', 'lytis'=>'vyras'],
        ['vardas' => 'Ona', 'lytis'=>'moteris'],
        ['vardas' => 'Kazys', 'lytis'=>'vyras'],
        ['vardas' => 'Mykolas', 'lytis'=>'vyras'],
        ['vardas' => 'Zose', 'lytis'=>'moteris'],
        ['vardas' => 'Marija', 'lytis'=>'moteris'],
        ['vardas' => 'Albinas', 'lytis'=>'vyras'],
        ['vardas' => 'Vaclovas', 'lytis'=>'vyras'],
        ['vardas' => 'Janina', 'lytis'=>'moteris'],
    ];
function moteru() {
    $s=0;
    foreach ($this->m as $z) {
        if ($z['lytis'] == 'moteris') $s++;
    }
    return $s;
}
    function vyru() {
        $s=0;
        foreach ($this->m as $z) {
            if ($z['lytis'] == 'vyras') $s++;
        }
        return $s;
    }
}

$clase = new abc();
echo 'Moteru: ' . $clase->moteru() . '<br>' . 'Vyru: ' . $clase->moteru();