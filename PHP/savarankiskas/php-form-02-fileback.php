<?php
/**
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : 2x tekstiniai laukai: Šalies pavadinimas, , gyventojų skaičius. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į sesiją. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten failo turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
 */

if (file_exists('php-form-02.txt')){
$m = json_decode(file_get_contents('php-form-02.txt'), true);
}
else { $m = [];
}

$m[] = $_POST;
file_put_contents('php-form-02.txt', json_encode($m));

header("location: php-form-02-filefront.php");