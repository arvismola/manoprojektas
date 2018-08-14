<?php


$m = [1,3,5];
$d = [1,3,5,8,10,10,55];
$s = 0;
foreach($m as $e){   // loop kad sudeti visus po viena paeiliui, reikia susigalvotisavo kintamaji, kabliataskis gale nebutinas
    $s += $e;
};
echo $s;    echo '<br>';
echo $s / count($m); echo '<br>'; // vidurkis geriausia su count tagu

echo round($s / count($d), 2); echo '<br>'; // suapvalinimas su nr po kablelio

$masinos = [
    [
        'gamintojas' => 'Honda',
        'modelis' => 'Civic',
        'kaina' => 1500,
    ],
    [
        'gamintojas' => 'BMW',
        'modelis' => '320i',
        'kaina' => 2000,
    ],
    [
        'gamintojas' => 'Audi',
        'modelis' => '100',
        'kaina' => 500,
    ],
];

$s = 0;
foreach($masinos as $e){
    $s += $e['kaina'];
};
echo round($s / count($masinos), 2); echo '<br>';

$a = [                                  // tipo su lentele loop'as
    'Jonas' => 1000,
    'Petras' => 2000,
    'Antanas' => 1500,
];

echo '<table>';
foreach($a as $key => $val){
    echo '<tr>';
    echo '<td>' . $key . '</td>' . '<td>' . $val . '</td>';
};
echo '</table>'; echo '<br>';


