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
// kad lietuviu ir RU kalba veiktu:
// 1) html faile ijungti <meta charset="utf-8">
// 2) prisijjungtus prie DB, PHP nustatyti utf8
mysqli_set_charset($prisijungimas, 'utf8'); // !!! utf be "-" !!!;  iskart po prisijungimu
// 3) DB-je nustayti ant stulpeliu colation: utf8_general_ci arba lt
 
