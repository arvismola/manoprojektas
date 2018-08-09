<?php


$a = 10;
$b = 2;
echo "<br>";

$c = $a + $b;  // rezultatas 12
$c += 5;  // sutrumpinta sintakse
echo $c;
echo "<br>";


$d = $a - $b; // rezultatas 8
$e = $a * $b; // rezultatas 20
$f = $a / $b; // rezultatas 5
echo $a % 3; // 1 (grazina tik liekana kad gautusi 1)
echo "<br>";

echo $a**$b; // kelimas laipsniu. 100
echo "<br>";

$q = 6 + 7 - 2 > 100;
var_dump($q);  /// grazina logine reiksme formulems, var_dumt tik tam kad atvaizduotu narsykle.
echo "<br>";

$a = true;
$b = true;
$c = false;
var_dump($a and $b and $c);
var_dump($a && $b && $c);   //// duoda true jei visi dalyviai yra true.
echo "<br>";

var_dump($a or $b or $c);  /// duos true jei bent vienas dalyvis yra true, kad gauti falsi visi turi buti false.
echo "<br>";

var_dump($a and $b and !$c);  /// arba tagas not, paheicia reiksme testavimo sumetimais
echo "<br>";

// xor duoda true tik tada kada vienas true, jei abu true ar abu false bus false.









