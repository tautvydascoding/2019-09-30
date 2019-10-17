<?php
// UZDUOTIS
// google php CRUD

// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

//Jeigu visas failas php, tai gale neuzdaromas php


//prisijungimo sukurimas
//konstantos - nekintantys kintamieji
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'hospital4');
define('DB_HOST', 'localhost'); //visada toks PATS
//define(PORT, '8889'); //jeigu pakeistas MAMP MYSQL portas, TIK tautvydas11
// isijungiam debug mode, kad pamatyti ar veikia kodas
$debug_mode = 0; //gali buti dar reiksmes 1,2,3
if($debug_mode > 1) {

}
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

if ($prisijungimas) {
//  echo "Prisijungete prie DB <br/>";

} else {
  echo "ERROR nepavyko prisijungti <br />".mysqli_connection_error();
}

$rez=mysqli_query($prisijungimas, "Select * From doctors");
$masyvas=mysqli_fetch_assoc($rez); //is grizusiu duomenu pasiima tik viena eilute

//if ($masyvas["id"] ==2 ) {
foreach ($masyvas as $masyvoTurinys){

//echo $masyvas["name"];
}

function getDoctor($prisijungimas, $nr) {

    $rez = mysqli_query($prisijungimas,"SELECT * FROM doctors WHERE id = '$nr'");
    $masyvas = mysqli_fetch_assoc($rez);

    return $masyvas;
}

//echo getDoctor($prisijungimas, 3);
//$gydytojasArray = getDoctor($prisijungimas, 3);
//print_r($gydytojasArray);
//echo "Vardas".$gydytojasArray['name']."<br>";




//}
