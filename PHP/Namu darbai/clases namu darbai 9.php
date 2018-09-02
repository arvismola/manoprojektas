<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “preke”, kuri turi savybes ‐ kodas, pavadinimas, kaina. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ kodas, pavadinimas, kaina padėtų į savo savybes.
Panaudodami prieš tai sukurtą klasę "preke", sukurkite klases "vaikams" ir "studentams", kurios paveldi "preke" klasę. "preke" klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “kodas, pavadinimas kaina”. "vaikams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (vaikams)”. vaikams‐ tiesiog paprastas žodis. "studentams" klasėje perrašykite metodą "info", pakeisdami išvedamą eilutę į “kodas, pavadinimas, kaina (studentams)”. studentams‐ tiesiog paprastas žodis. "vaikams" ir "studentams" klasių metodas info turi turėti parametrą "nuolaida" (procentais), kurio pagalba būtų perskaičiuojama prekės kaina išvedimo metu. Patkrinkite visų trijų klasių metodo “info” veikimą.
 *
 */

class preke {
    public $kodas, $pavadinimas, $kaina;
    function __construct($kod, $pav, $kai){
        $this->kodas = $kod;
        $this->pavadinimas = $pav;
        $this->kaina = $kai;
    }
    function info(){
        $s = 'Kodas: %s, Pavadinimas: %s, Kaina: %s';
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina);
    }
}
class vaikams extends preke {
    function info(){
        $a = $this->kaina - ($this->kaina / 100 * 10);
        $s = 'Kodas: %s, Pavadinimas: %s, Kaina (vaikams taikoma 10proc. nuolaida): ' . $a;
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina);
    }

}

class studentams extends preke {
    function info(){
        $a = $this->kaina - ($this->kaina / 100 * 20);
        $s = 'Kodas: %s, Pavadinimas: %s, Kaina (studentams taikoma 20proc. nuolaida): ' . $a;
        echo sprintf($s, $this->kodas, $this->pavadinimas, $this->kaina);
    }

}
$prek = new preke(123, 'testas', 100);
echo $prek->info(); echo '<br>';

$vaik = new vaikams(123, 'testas', 100);
echo $vaik->info(); echo '<br>';

$stud = new studentams(123, 'testas', 100);
echo $stud->info(); echo '<br>';

$prek = new preke(456, 'testas2', 150);
echo $prek->info(); echo '<br>';

$vaik = new vaikams(456, 'testas2', 150);
echo $vaik->info(); echo '<br>';

$stud = new studentams(456, 'testas2', 150);
echo $stud->info(); echo '<br>';