<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="forms-nd-02-backend.php">
    <label>Šalies pavadinimas:</label><input type="text" name="pavadinimas"><br>
    <label>Sostinės pavadinimas:</label><input type="text" name="sostine"><br>
    <label>Gyventojų skaičius:</label><input type="text" name="skaicius"><br>
    <label>Šalies tipas:</label><br>
    <label>Rytų:</label><input type="radio" name="tipas" value="rytu"><br>
    <label>Vakarų:</label><input type="radio" name="tipas" value="vakaku"><br>
    <input type="submit" value="siusti">
</form>
    <?php
    if (Isset($_SESSION['salys'])){
        echo '<table>';
        usort($_SESSION['salys'], function($a, $b){
           if ($a['skaicius'] > $b['skaicius']) return -1;
           elseif ($a['skaicius'] < $b['skaicius']) return 1;
           else return 0;
        });
        $i=0;
        foreach ($_SESSION['salys'] as $salis) {
            if ($i < 3) {
                echo '<tr>';
                echo '<td>' . $salis['pavadinimas'] . '</td>';
                echo '<td>' . $salis['sostine'] . '</td>';
                echo '<td>' . $salis['skaicius'] . '</td>';
                echo '<td>' . $salis['tipas'] . '</td>';
                echo '</tr>';
            } else break;
            $i++;
        }
        echo '</table>';
    }
    ?>
</body>
</html>

