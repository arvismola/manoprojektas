<?php
/**
Yra darbuotoju sarasas, kur kiekvienas darbuotojo duomenys yra: vardas, pavarde, lytis. Isvesti : darbuotoju sarasa (vardas, pavarde) rusiuotu sarasu (ol)pridedant priekyje mr. prie vyru ir ms. prie moteru.
 */

$m = [
    ['vardas' => 'Antanas', 'pavarde'=> 'Bebrovskis', 'lytis' => 'vyras'],
    ['vardas' => 'Margarita', 'pavarde'=> 'Durniene', 'lytis' => 'moteris'],
    ['vardas' => 'Liucijus', 'pavarde'=> 'Lapuchas', 'lytis' => 'vyras'],
];

function darb($a)
{
    if ($a['lytis'] == 'vyras') {
        return 'Mr.' . ' ' . $a['vardas'].' '. $a['pavarde'];
    } else {
        return 'Ms.' . ' ' . $a['vardas'].' '. $a['pavarde'];
    }
}

echo '<ol>';
foreach ($m as $zmones) {
    echo '<li>' . darb($zmones). '</li>';
}