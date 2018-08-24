<?php
/**
Yra clase su savybe - masyvu. Konstruktoriaus pagalba sugeneruoti "n" atsitiktiniu skaiciu intervale nuo a iki b. Metodo pagalba suskaiciuoti nelyginiu skaiciu suma ir grazinti, pademostruoti veikima.
 */

class cons {
    public $m=[];
    function __construct($n,$a,$b){
        for ($i=0; $i<$n; $i++) {
            $this->m[] = rand($a,$b);
        }
    }
    function vidurkis() {
        $s=0;
        foreach ($this->m as $x) {
            if ($x%2!=0) {
                $s +=$x;
            }
        }
        return $s;
    }
}

$qwer = new cons(10, 1, 100);
echo $qwer->vidurkis();