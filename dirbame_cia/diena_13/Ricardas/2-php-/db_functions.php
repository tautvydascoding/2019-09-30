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
    $rez = mysqli_query($prisijungimas, "SELECT * FROM doctors WHERE id='$nr'"); // uzdet kabutes aplink reiksmes kaip $nr
    $masyvas = mysqli_fetch_assoc($rez);
    return $masyvas;
}

// $gydytojasArray = getDoctor($prisijungimas, 2);


// echo "Vardas: " . $gydytojasArray['name'] . "<br>";
// echo "Vardas: {$gydytojasArray['name']} <br>";
// UZDUOTIS 1.1: susikurti nauja projekta ir issivesti gydytoja is DB naudojant foreach ir getDoctor($nr) f-ja

// UZDUOTIS 1.2:
// be foreach atspausdinti visa gydytojo info
// <h2> <em>nr</em> vardas pavarde</h2>

// UZDUOTIS 1.3:
// su kokiu nors ciklu atspausdinti VISUS gydytojus
// <h2 class='bg-info   m-1'> vardas pavarde</h2>

// UZDUOTIS 1.3.2
// A) sukurti nauja nauja faila, pvz:  template-item.php
// B)  perkelti dizaina is index failo ciklo (1.3) (visa h2 eilute):
//     <h2 class='bg-info   m-1'> vardas pavarde</h2>
//       i   faila  template-item.php
// C)    index failo cikle (1.3) ideti:
//       include  (' template-item.php');
//  papildomai)  template-item.php   faile uzdeti klases 'col-md-4  m-1'
//           virs ciklo uzdeti klase 'row' ir po ciklu uzdaryti