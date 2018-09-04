<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="php-form-02-fileback.php">
    <label>Šalies pavadinimas:</label><input type="text" name="pavadinimas"><br>
    <label>Gyventojų skaičius:</label><input type="text" name="skaicius"><br>
    <input type="submit" value="siusti">
</form>
<?php
if (file_exists('php-form-02.txt')){
    $m = json_decode(file_get_contents('php-form-02.txt'), true);
    echo '<table>';
    usort($m, function($a, $b){
        if ($a['skaicius'] > $b['skaicius']) return -1;
        elseif ($a['skaicius'] < $b['skaicius']) return 1;
        else return 0;
    });
    $i=0;
    foreach ($m as $salis) {
        if ($i < 3) {
            echo '<tr>';
            echo '<td>' . $salis['pavadinimas'] . '</td>';
            echo '<td>' . $salis['skaicius'] . '</td>';
            echo '</tr>';
        } else break;
        $i++;
    }
    echo '</table>';
    var_dump($m);
}
?>
</body>
</html>
