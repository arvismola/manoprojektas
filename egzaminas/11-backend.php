<?php
/**
Sukurkite HTML dokumenta su įvedimo formą. Forma turėtu turėti laukus : 2x tekstiniai laukai: Įmonės pavadinimas, Įmonės kodas, 1x radio pasirinkimas: Kliento tipas‐ bronzinis, sidabrinis, auksinis. Forma turėtu buti nusiųsta į 11uzduotis.php failą metodu POST. 11uzduotis.php faile pridėkite įrašą į sesiją ir redirectinkite vartotoją atgal į įvedimo formos html dokumentą.
 */

session_start();

$_SESSION['imones'][] = $_POST;
header("location: 11-frontend.html");