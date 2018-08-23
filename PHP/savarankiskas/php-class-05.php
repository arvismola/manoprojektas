<?php
/**
Sukurti klase ir metoda, Klase turi tureti savybe (masyva), metodo parametrai : tekstas, skaicius.
 * Funkcija turi atsitiktiniu budu ismaisyti teksto simbolius ir ideti i masyva tiek kartu kiek nurodyta natrame parametre. Su var_dump isvesti klases egzemplioriaus turini.
*/

class vasia {
    public $m = [];
    function text($a, $b) {
        $a = str_shuffle($a);
        $this->m[] = $a;
        for ($i=0; $i<count($b);$i++){
        }
    }
}

$abc = new vasia();
$abc->text('esu nes nesigauna parasyti paprastos programos su php', 10);
var_dump($abc);