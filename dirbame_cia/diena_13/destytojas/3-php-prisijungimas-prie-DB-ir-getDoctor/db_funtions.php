<?php
// UZDUOTIS
// phpinfo( );

// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// ----------nustaytmai---------------------
$debug_mode = 0; // 1, 2, 3
// konstantos - nekintantys kintamieji
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZPDIS', 'root');
define('DB_VARDAS', 'hospital9');
define('DB_HOST', 'localhost');
// define(PORT, '8889');  // jeigu pakeistas MAMP MYSQL portas,TIK tada naudoti


//
// -------------------------------------------
$prisijungimas = mysqli_connect( DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZPDIS, DB_VARDAS);
if ($prisijungimas) {   // $prisijungimas == true
    if($debug_mode > 1) {
        echo "Prisijungte prie DB sekmingai! <br />";
    }
} else {
    echo "ERROR nepavyko prisijugnti prie DB: <br>" . mysqli_connect_error();
}



function getDoctor($prisij, $nr) {
    $rezultataiMysqlObjektas = mysqli_query($prisij, "SELECT * FROM doctors WHERE id ='$nr'  ");
    // mysqli_fetch_assoc - is grizusiu duomenu paima TIK viena Eilute
    $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjektas);
    return $rezultataiArray;
}
// test
$gydytojasArray = getDoctor($prisijungimas, 4); // test papimam id=4 gydytoja
print_r($gydytojasArray); // test
echo "Vardas: " . $gydytojasArray['name'] . "<br>";
echo "Vardas:  {$gydytojasArray['name']}  <br>";

//
