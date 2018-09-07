<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form method="post" action="pdo-01-backend.php">
    <label>Šalies pavadinimas:</label><input type="text" name="pav"><br>
    <label>Gyventojų skaičius:</label><input type="text" name="gyv_sk"><br>
    <label>Šalies tipas:</label><br>
    <label>Rytų:</label><input type="radio" name="tipas" value="rytu"><br>
    <label>Vakarų:</label><input type="radio" name="tipas" value="vakaku"><br>
    <input type="submit" value="siusti">
</form>
<?php
echo '<table>';
try {
    $res = $cnn->prepare("select * from salys order by aut_kai desc");
    $res->execute([]);
    $i = 1;
    while ($salys = $res->fetch()){
        echo '<tr>';
        echo '<td>' . $i . '</td>';
        echo '<td>' . $salys['sal_pav'] . '</td>';
        echo '<td>' . $salys['sal_gyv_sk'] . '</td>';
        echo '<td>' . $salys['sal_tipas'] . '</td>';
        echo '</tr>';
        $i++;
    }
}
catch(PDOException $e) {
    echo 'code: ' . $e->getCode() . ', message: ' . $e->getMessage() . ', at line: ' . $e->getLine();
}
echo '</table>';
?>
</body>
</html>