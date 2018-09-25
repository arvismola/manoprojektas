<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę mokiniai, kurioje būtų viena savybė - $sarasas, kuri bus masyvas, taip pat būtų metodas insert($mokinys), kuris prideda naujo mokinio vardą į masyvą sąvybę $sarasas. Taip pat sukurkite metodą vid(), kuris grąžintų masyve sąvybėje esančių elementų (mokinių vardų) ilgio vidurkį.
 */

class mokiniai {
    public $sarasas;

    function insert($mokinys){
        $this->sarasas[] = $mokinys;
    }
    function vid(){
        $s=0;
        for($i=0; $i<count($this->sarasas); $i++){
            $s += strlen($this->sarasas[$i]);
        }
        return $s / count($this->sarasas);
    }
}

$testas = new mokiniai();
$testas->insert('arvydas');
$testas->insert('gytis');
$testas->insert('rytis');
echo $testas->vid();


echo '<br>';
echo strlen('arvydas'); echo '<br>';
echo strlen('gytis'); echo '<br>';
echo strlen('rytis'); echo '<br>';
var_dump($testas->sarasas);