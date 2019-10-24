<?php
// UZDUOTIS
// phpinfo( );

// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// ----------nustaytmai---------------------
$debug_mode = 0; // 1, 2, 3
$publish_mode = false; // 1, 2, 3
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

// SELECT * FROM doctors; // test
function getDoctor( $nr) {
    $rezultataiMysqlObjektas = mysqli_query(getPrisijungimas(), "SELECT * FROM doctors WHERE id ='$nr'  ");
    // tikrinu ar grizo is DB duomenys
    if ($rezultataiMysqlObjektas) {  //   mysqli_num_rows($rezultataiMysqlObjektas) > 0
        // mysqli_fetch_assoc - is grizusiu duomenu paima TIK viena Eilute
        $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObjektas);
        return $rezultataiArray;
    } else {
        echo "ERROR: nepavyko. NES SQL kalboje yra kaidu:" . mysqli_error(getPrisijungimas());
        return NULL;
    }
}
// test
// $gydytojasArray = getDoctor( 1); // test papimam id=4 gydytoja
// print_r($gydytojasArray); // test
// echo "Vardas: " . $gydytojasArray['name'] . "<br>";
// echo "Vardas:  {$gydytojasArray['name']}  <br>";

function createDoctor($vardas, $pavarde, $password){
    $vardas = htmlspecialchars(trim($vardas),  ENT_QUOTES) ;
    $pavarde = htmlspecialchars(trim($vardas),  ENT_QUOTES) ;

    $password = md5($password); // uzkoduoji, BET sevoviskai NEGERAI!!!
    $password = md5(md5($password . "1")); // uzkoduoji, pusiau geras

// naujesnis uzkodavimas (nepamirskit  "password_verify()")
$password = password_hash($password, PASSWORD_DEFAULT);
    // PATIKRINIMAS Query the database for username and password
    // if(password_verify($password, $hashed_password)) {
    //     // If the password inputs matched the hashed password in the database
    //     // Do something, you know... log them in.
    // }
    // // Else, Redirect them back to the login page.


    $manoSQL_String = "INSERT INTO doctors VALUES (NULL, '$vardas', '$pavarde') ";
    $arSuveike = mysqli_query(getPrisijungimas(), $manoSQL_String);
    if ( !$arSuveike) {
        echo "ERROR: mano SQL sintakses klaidos:" . mysqli_error(getPrisijungimas());
    }
}
// test
// createDoctor('Antanas', 'Antanaitis');
// createDoctor('Tomas', 'Tomaitis');
// createDoctor('Karolis', 'Karolaitis');

// DELETE FROM doctors WHERE id = '5'
function deleteDoctor($nr){
    $manoSQL_String = "DELETE FROM doctors
                              WHERE id = '$nr'
                              LIMIT 1
                      ";
    $arSuveike = mysqli_query(getPrisijungimas(), $manoSQL_String);
    if ( !$arSuveike) {
        echo "ERROR: mano SQL sintakses klaidos:" . mysqli_error(getPrisijungimas());
    }
}
// test
// deleteDoctor(6);
// deleteDoctor(8);


/*
    gydytojo duomenu redagavimas
    $nr - koreguojamo gydytojo ID duomenu bazeje
    $vardas - naujas /senas vardas
    $pavarde - nauja / sena pavarde
*/
function updateDoctor($nr, $vardas, $pavarde){
    $manoSQL_String = "  UPDATE doctors  SET
                                            name  = '$vardas',
                                            lname = '$pavarde'
                                        WHERE id = '$nr'
                                        LIMIT 1
                        ";
    $arSuveike = mysqli_query(getPrisijungimas(), $manoSQL_String);
    if ( !$arSuveike) {
        echo "ERROR: mano SQL sintakses klaidos:" . mysqli_error(getPrisijungimas());
    }
}
// test
// updateDoctor(1, 'Antanas', 'Antanaitis');






function getDoctors( $kiekis = 999999) {
    $manoSQL_String = "SELECT * FROM doctors LIMIT $kiekis  ";
    $rezultataiMysqlObjektas = mysqli_query(getPrisijungimas(), $manoSQL_String);
    // tikrinu ar grizo is DB duomenys
    if ($rezultataiMysqlObjektas) {
        return $rezultataiMysqlObjektas;
    } else {
        echo "ERROR: nepavyko. NES SQL kalboje yra kaidu:" . mysqli_error(getPrisijungimas());
        return NULL;
    }
}
//===================testuojam getDOctors================
// $visiGydytojaiMYSQL_Objektas = getDoctors();
// // print_r($visiGydytojaiMYSQL_Objektas);
//
//
// $gydytojas_Array = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas); // mysqli_fetch_assoc - is grizusiu duomenu paima TIK viena Eilute
// while ($gydytojas_Array) {
//     print_r($gydytojas_Array);
//     echo "<br>";
//
//     $gydytojas_Array = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas); // mysqli_fetch_assoc - is grizusiu duomenu paima TIK viena Eilute
// }


// while ($gydytojas_Array = mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas)) {
//     print_r($gydytojas_Array);
//     echo "<br>";
//  }
