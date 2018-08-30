<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “šalis”, kuri turi savybes ‐ pavadinimas, gyventojų skaičius, žemynas. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, gyventojų skaičius, žemynas ‐ perduotus parametrus padėtų į savo savybes. Sukurkite klases "didelė" ir "maza", kurios paveldi "šalis" klasę. "šalis" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, gyventojų skaičius, žemynas”. "didelė" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “pavadinimas, gyventojų skaičius, žemynas (didelis šalis)”. didelė šalis ‐ tiesiog paprastas žodis. Patkrinkite visų trijų klasių metodo “info” veikimą.
 */

class salis {
    public $pavadinimas, $skaicius, $zemynas;
    function __construct($pav, $sk, $zem)
    {
        $this->pavadinimas = $pav;
        $this->skaicius = $sk;
        $this->zemynas = $zem;
    }
    function info(){
        $s = 'Salies pavadinimas: %s, Gyventoju skaicius: %s, Zemynas: %s';
        echo sprintf($s, $this->pavadinimas, $this->skaicius, $this->zemynas);
    }
}
class maza extends salis {
    function info(){
        $s = 'Salies pavadinimas: %s, Gyventoju skaicius: %s, Zemynas: %s (maza salis)';
        echo sprintf($s, $this->pavadinimas, $this->skaicius, $this->zemynas);
    }
}
class didele extends salis {
    function info(){
        $s = 'Salies pavadinimas: %s, Gyventoju skaicius: %s, Zemynas: %s (didele salis)';
        echo sprintf($s, $this->pavadinimas, $this->skaicius, $this->zemynas);
    }
}
$sal = new salis('testas', 'testas 123123', 'testas');
$sal->info();
echo '<br>';
$maz = new maza('Lietuva', 3000000, 'Europa');
$maz->info();
echo '<br>';
$did = new didele('Ispanija', 5000000, 'Europa');
$did->info();