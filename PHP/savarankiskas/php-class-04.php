<?php
/**
 * Sukurti klase ir metoda kuris sugeneruotu numatyta kieki atsitiktiniu skaiciu (parametras) ir kad rezultata grazintu kaip masyva. Pademonstruoti veikima.
 */

class masyvas {
    function gen($a){
        $m = [];
        for ($i=0; $i<$a; $i++){
                $m[$i] = rand(1,100);
            }
            return $m;
        }
    }

    $miau = new masyvas ();
var_dump($miau->gen(5));
