<?php
/**
Sukurkite frontend failą su įvedimo forma. Forma turėtu turėti laukus : 3x tekstiniai laukai: Šalies pavadinimas,gyventojų skaičius, 1x radio pasirinkimas: Šalies tipas vakarų, rytų. Forma turėtu būti nusiųsta į backend failą metodu POST. Duomenis patalpinkite į sesiją. Iš backend failo automatiškai nukreipti (header) į frontend failą ir ten sesijos turinį atvaizduoti lentele (tik pirmas tris didžiausias šalis).
 */

include "pdo-login.php";
try {
    $sql = "insert into salys (sal_pav, sal_gyv_sk, sal_tipas) values(:pav, :gyv_sk, :tipas)";
    $res = $cnn->prepare($sql);
    $res->execute([
        ':pav' => $_POST['pav'],
        ':gyv_sk' => $_POST['gyv_sk'],
        ':tipas' => $_POST['tipas']
    ]);
    header("location: pdo-01-frontend.php");
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}