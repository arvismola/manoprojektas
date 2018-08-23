<?php
/**
Sukurti klase ir toje klaseje metoda, kuris paskaiciuotu dvieju skaiciu suma, kitu dvieju skaiciu suma, ir grazintu skirtuma tarp pirmos sumos ir antros sumos.
 */

Class plius {
    function suma($a, $b, $c, $d) {
        $e = ($a + $b) - ($c +$d);
        return $e;
    }
}

$miau = new plius();
echo $miau->suma(5, 8, 10, 2);
