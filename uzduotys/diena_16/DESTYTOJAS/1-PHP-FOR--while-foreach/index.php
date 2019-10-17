<?php


// ---- -PASIKARTOJIMAS PROGRAMAVIMO PAGRINDU TESTUI-----
// 1) sukurti masyva : 1981, 1980, 1975, 1995, 1999
// 1.1) atspausdinti masyva naudojant FOR cikla, While cikla ir FOREACH cikla
// 1.4 Atspausdinti kas antra data
// 1.5 Atspasudinti visas datas nuo 3-cios (iskaitant 3-cia)

// 2) sukurti matirca:
// Tomas, 1981, Buhalteris
// Ona 1980 Programuotoja
// Petras, 1975, Direktorius
// 2.1) atspausdinti su FOR ciklu
// 2.2) atspausdinti su FOR FOR ciklu
// 2.3) atspausdinti su FOREACH

$masyvas = [ 1981, 1980, 1975, 1995, 1999 ];

// 1.1.1
// for ($i=0; $i < sizeof($masyvas) ; $i++) {
for ($i=0; $i < count($masyvas) ; $i++) :
     echo "Gime:" . $masyvas[$i] . "<br>";
endfor;

// 1.1.2
foreach ($masyvas as $stalciausPavad => $stalciausTurinys) {
    echo "Gimimo data su FOREACH $stalciausPavad:   $stalciausTurinys  <br>";
}
// 1.1.3
$kk = 0;
while ( $kk <  5 ) {
    echo "While gimimo datos: " .   $masyvas[ $kk ] . "<br>";
     $kk++;

     // jei skaiciuuoju/ dirbu be galo
     if($kk > 10000) {
         break; // nutraukiu while cikla
     }
}
// 1.4 Atspausdinti kas antra data
for ($i=0; $i < 5;   $i = $i + 2  ) {
    echo "Kas antra data: " .  $masyvas[ $i ] . "<br>";
}
// ARBA
// for ($i=0; $i < 5 ; $i++) {
//     echo "Kas antra data: " .  $masyvas[ $i ] . "<br>";
//     $i++;
// }
for ($i=0, $tt=100     ;    $i < 5  ;      $i++, $tt = $tt +2 ) {
    echo " i: $i ir tt: $tt <br />"  ;
}
// 'i' ir kam "tt"
//  0         100
//
// 1.5 Atspausdinti visas datas nuo 3-cios (iskaitant 3-cia)
for ($i=3; $i < 5 ; $i++) {
    echo "Nuo trecio: " .  $masyvas[ $i ] . "<br>";
}
