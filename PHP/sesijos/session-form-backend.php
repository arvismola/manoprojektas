<?php
session_start();

$_SESSION['asmenys'][] = [
    'vardas' => $_POST['vardas'],
    'pavarde' => $_POST['pavarde'],
    'laikas' => date("Y-m-d H:m:s")
];
//var_dump($_SESSION);

usort($_SESSION['asmenys'], function($a, $b){
    if (strcmp($a['laikas'], $b['laikas']) > 0) return -1;
    elseif (strcmp($a['laikas'], $b['laikas']) < 0) return 1;
    else return 0;
});



echo '<table>';
for ($i=0; $i<count($_SESSION['asmenys']); $i++){
    echo '<tr>';
    echo '<td>' . ($i + 1) . '</td>';
    echo '<td>' . $_SESSION['asmenys'][$i]['vardas']  . '</td>';
    echo '<td>' . $_SESSION['asmenys'][$i]['pavarde']  . '</td>';
    echo '<td>' . $_SESSION['asmenys'][$i]['laikas']  . '</td>';
    echo '</tr>';
    echo '</table>';
}
?>
<a_href="seesion-form-frontend">Atgal</a>
