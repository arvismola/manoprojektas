<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="forms-nd-02-backend.php">
    <label>Šalies pavadinimas:</label><input type="text" name="salies pavadinimas"><br>
    <label>Sostinės pavadinimas:</label><input type="text" name="sostine"><br>
    <label>Gyventojų skaičius:</label><input type="text" name="gyventoju skaicius"><br>
    <label>Šalies tipas:</label><br>
    <label>Rytų:</label><input type="radio" name="salies tipas" value="rytu"><br>
    <label>Vakarų:</label><input type="radio" name="salies tipas" value="vakaku"><br>
    <input type="submit" value="siusti">
    <?php
    echo '<table>';
    for ($i=0; $i<count($_SESSION['salys']); $i++){
        echo '<tr>';
        echo '<td>' . $_SESSION['salys'][$i]['salies pavadinimas']  . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['sostine']  . '</td>';
        echo '<td>' . $_SESSION['salys'][$i]['gyventoju skaicius']  . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    ?>
</form>
</body>
</html>