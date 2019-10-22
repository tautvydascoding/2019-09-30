<?php



$visosPrekes = [];
$prekiuFailas = fopen('prekes.txt', 'r') or die ('Nepavyko nuskaityti failo');
$i = 0;
// kol nerasta failo pabaiga, nuskaitome faila po viena eilute
while (  feof($prekiuFailas) == false) {
    $eiluteString =  fgets( $prekiuFailas ); // return: STRING; nuskaito VIENA eilute is failo (kiekviena karta kai paliedi komanda)
    $preke_array = explode("; ", $eiluteString); // return Array; susprogdina tekstas i masiva pagal paduota skirtuka ";"

    $visosPrekes[$i] = $preke_array; // i matrica idedam masyva vienos prekes
    $i++;
}
print_r($visosPrekes); // test


for ($i=0; $i < count($visosPrekes); $i++) :
    echo "<h2> {$visosPrekes[$i][0]} </h2>";
    echo "<p>  {$visosPrekes[$i][3]} </p>";
    echo "<button>  {$visosPrekes[$i][1]} </button>";
    echo "<div> liko: {$visosPrekes[$i][2]} vnt.</div>";
endfor;
