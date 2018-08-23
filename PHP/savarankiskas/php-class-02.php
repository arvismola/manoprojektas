<?php
/**
Sukurti klase ir toje klaseje metoda, kuris paskaiciuotu 3 skaiciu kvadratu sumos sakni.
 */

// **2

class abc {
    function math($a, $b, $c){
        $aa = $a**2; $bb = $b**2; $cc = $c**2;
        $d = $aa + $bb + $cc;
        $e = sqrt($d);
        return $e;
    }
}

$miau = new abc();
echo $miau->math(5, 44, 4);