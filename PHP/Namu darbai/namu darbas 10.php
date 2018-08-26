<?php
/**
Sukurti 3 kintamuosius ir jiems priskirti reikšmes. Kintamuojų reikšmes pakelti kvadratu, sudėti ir ištraukti kvadratinę šaknį. Rezultatą įrašyti į naują kintamajį. Išvesti su echo.
 */

function mat($a, $b, $c) {
    $aa = $a**2; $bb = $b**2; $cc = $c**2;
    $d = $aa + $bb + $cc;
    $e = sqrt($d);
    return $e;
}

echo mat(7,8, 9);

//veikia