<?php
/**
 Sukurti forma(post): gamintojas, modelis, metai(select), nauja/naudota(radio), kaina.
 * su metodu post perduoti duomenis i backend ir sudeti i klase auto, su atitinkamomos savybemis. Rezultata isvesti su var_dump.
 */

class auto {
    public $gamintojas, $modelis, $metai, $bukle, $kaina;
    function __construct($gam,$mod,$met, $buk, $kain){
        $this->gamintojas=$gam;
        $this->modelis=$mod;
        $this->metai=$met;
        $this->bukle=$buk;
        $this->kaina=$kain;
    }
}

$cars = new auto($_POST['gamintojas'],$_POST['modelis'],$_POST['metai'],$_POST['bukle'],$_POST['kaina']);
var_dump($cars);




