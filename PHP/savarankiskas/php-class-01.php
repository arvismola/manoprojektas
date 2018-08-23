<?php
/**
sukurti clase ir toje claseje metoda kurio pagalba butu galima sudauginti 2 skaicius. Metodas turi grazinti rezultata. Pademonstruot veikima.
 */

class abc {
    function daug($a, $b) {
        $c = $a * $b;
        return $c;
    }
}


$miau = new abc();

echo $miau->daug(2, 3);