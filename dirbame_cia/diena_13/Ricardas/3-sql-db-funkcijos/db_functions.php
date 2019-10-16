<?php

// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)

// Prisijungimas
define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', '');
define('DB_VARDAS', 'hospital9');
define('DB_HOST', 'localhost');
//define(PORT, '8889'); // tik jei pakeistas portas

$debug_mode = 0; //1, 2, 3
//DB_HOST visad pirmas!============\/
$prisijungimas = mysqli_connect(DB_HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

// if($prisijungimas) {
//     if($debug_mode > 0) { 
//         echo "Prisijungete prie DB sekmingai <br>";
//     } 
// } else {
//     echo "error, nepavyko prisijungtis".mysqli_connect_error();
// }


function getDoctor($prisijungimas, $nr) {
    $rez = mysqli_query($prisijungimas, "SELECT * FROM doctors WHERE id=$nr");
    $masyvas = mysqli_fetch_assoc($rez);
    print_r($masyvas);
}

getDoctor($prisijungimas, 2);




