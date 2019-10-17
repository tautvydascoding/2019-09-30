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


// -------------------------------------------
$prisijungimas = mysqli_connect( DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZPDIS, DB_VARDAS);


/*
    prisijungia prie DB ir grazina connection
    return - DB prisijungima
*/
function getPrisijungimas() {
    global $prisijungimas, $debug_mode; // paima global variables

    if ($prisijungimas) {   // $prisijungimas == true
        if($debug_mode > 1) {
            echo "Prisijungte prie DB sekmingai! <br />";
        }
        return $prisijungimas;
    } else {
        echo "ERROR nepavyko prisijugnti prie DB: <br>" . mysqli_connect_error();
    }
}
getPrisijungimas();
/*
    is DB paima gydytoja pagal jo ID
    $prisij - DB prisijungimas
    $nr     - gydytojo ID duomenu bazeje
    return  - array rasto gydytojo
*/
function getDoctor( $nr) {
    $rezultataiMysqlObjektas = mysqli_query(getPrisijungimas(), "SELECT * FROM doctors WHERE id ='$nr'  ");
    // tikrinu ar grizo is DB duomenys
    if ($rezultataiMysqlObjektas) {  //   mysqli_num_rows($rezultataiMysqlObjektas) > 0
        // mysqli_fetch_assoc - is grizusiu duomenu paima TIK viena Eilute
        $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjektas);
        return $rezultataiArray;
    } else {
        echo "ERROR: nepavyko paimit gydytojo: $nr. " . mysqli_error(getPrisijungimas());
        return NULL;
    }
}
// test
// $gydytojasArray = getDoctor( 1); // test papimam id=4 gydytoja
// print_r($gydytojasArray); // test
// echo "Vardas: " . $gydytojasArray['name'] . "<br>";
// echo "Vardas:  {$gydytojasArray['name']}  <br>";

//
