<?php

// 2) sukurti matirca:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius

// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH

$darbuotojai = [];
$x1 = ['Tomas', 1981, 'Buhalteris'];
$x2 = ['Ona', 1980, 'Programuotoja'];
$x3 = ['Petras', 1975, 'Direktorius'];

$darbuotojai[0] = $x1;
$darbuotojai[1] = $x2;
$darbuotojai[2] = $x3;

// [0] - keilintas darbuotojas
// [2] - skaicius is Tomo masyvo
echo "Tomo specialybe yra:" . $darbuotojai[0][2] . "<br />";
echo "Petro gimimo data  yra:" . $darbuotojai[2][1] . "<br />";

for ($i=0; $i < 3 ; $i++) {
    echo "Vardas: " . $darbuotojai[$i][0] . "<br />";
    echo "Metai: " . $darbuotojai[$i][1] . "<br />";
    echo "Pareigos: " . $darbuotojai[$i][2] . "<br />";
}

// FOR FOR
for ($i=0; $i < 3 ; $i++) { // 3 - kiek skirtingu darbuotoju
    for ($g=0; $g < 3 ; $g++) {  // 3 - vardas, data, pareigos
        echo "FORFOR : " .   $darbuotojai[$i][$g] . "<br />";
    }
}

// teste
for ($i=0; $i < 2; $i++) {
    for ($g=0; $g < 5; $g++) {
        echo "Labas<br>"; // kiek kartu isves Labas?  10 kartu
    }
}
// kiek bus 'g' ir 'i'?
echo "g yra: $g <br>";
echo "i yra:" . $i;



for ($i=0; $i < 3; $i++) {
    echo "pasiruosimas <br>";
    for ($g=0; $g < 3 ; $g++) {
        echo "dirbu <br>";
    }
}
// 1. kam lygu $i?
// 2. kam lygu $g?
// 3. kiek kartu atspausdins 'pasiruosimas'?
// 4. kiek kartu atspausdins 'dirbu'?

//
