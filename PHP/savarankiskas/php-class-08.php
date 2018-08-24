<?php
/**
Surasyti skaicius i masyva. Sukurti klase ir savybe - masyva. Konstruktoriaus pagalba perduoti skaiciu masyva i klases savybe. Sukurti funkcija, kuri sumuoja kas antra skaiciu ir suma grazinti. Pademontruoti veikima.
 */

$sk = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22];

class clase {
    public $m=[];
    function __construct($x){
        $this->m=$x;
    }
    function sum() {
        $s=0;
        for ($i=0; $i<count($this->m); $i++){
            if ($i%2==0) {
                $s+=$this->m[$i];
            }
        }
        return $s;
    }
}

$z = new clase($sk);
echo $z->sum();

