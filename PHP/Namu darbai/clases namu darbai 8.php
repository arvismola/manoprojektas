<?php

class parduotuve {
    public $prekes = [];
    function add($p, $k){
        $this->prekes[]= [
            'pavadinimas' => $p,
            'kaina' => $k
        ];
    }
    function top3(){
        usort($this->prekes, function($a,$b){
            if ($a['kaina']>$b['kaina']) return 1;
            elseif ($a['kaina']>$b['kaina']) return -1;
            else return 0;
        });
        $m = [];
        for ($i=0; $i<count($this->prekes) and $i<3; $i++){
            $m[] = $this->prekes[$i];
        }
        return $m;
    }
}

$o = new parduotuve();
$o->add('duona', 1);
$o->add('sviestas', 3);
$o->add('kompiuteris', 500);
$o->add('sketis', 10);
$o->add('kiausiniai', 5);
$o->add('telefonas', 150);

$r = $o->top3();
var_dump($r);

