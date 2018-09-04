<?php
/**
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : 3x tekstiniai laukai: Šalies pavadinimas, sostinės pavadinimas, gyventojų skaičius, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į sesiją. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten sesijos turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
 */

session_start();

$_SESSION['salys'][] = [
    'salies pavadinimas' => $_POST['salies pavadinimas'],
    'sostine' => $_POST['sostine'],
    'gyventoju skaicius' => $_POST['gyventoju skaicius'],
    'salies tipas' => $_POST['salies tipas'],
];

function top3(){
    usort($_SESSION['salys'], function($a,$b){
        if ($a['gyventoju skaicius']>$b['gyventoju skaicius']) return 1;
        elseif ($a['gyventoju skaicius']>$b['gyventoju skaicius']) return -1;
        else return 0;
    });
    $m = [];
    for ($i=0; $i<count($_SESSION['salys']) and $i<3; $i++){
        $m[] = $_SESSION['salys'][$i];
    }
    return $m;
}

header("location: forms-nd-02-frontend.php");
