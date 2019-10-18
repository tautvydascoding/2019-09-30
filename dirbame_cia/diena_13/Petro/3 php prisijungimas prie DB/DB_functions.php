<?php
// php uzdaryti nereikia jei faile nebus html'o
//
//
// UZDUOTIS
// google CRUD
//
// 1. sukurti faila:  db_functions.php
// 2. parasysi PHP faile mysqli prisijungima prie DB
// 3. suprogramuoti f-jas:
// 4. getDoctor($nr)
//

//debuginimo kintamojo sukurimas

$debug_mode = 2; //[0,1,2,3];
//
//prisijungimas
//sukuriamos konstantos - nekintantys kintamieji

define('MYSQL_VARTOTOJAS', 'root');
define('MYSQL_SLAPTAZODIS', 'root');
define('DB_VARDAS', 'hospital9');
define('DB_HOST', 'localhost');

// define (PORT, '8889'); jei portas portas

$prisijungimas = mysqli_connect(DB_HOST,MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS,);

//if($prisijungimas){
//    echo "Prisijungete prie DB sekmingai! <br/>";
//} else {
//    echo "ERROR nepavyko prisijungti prie DB: <br>". mysqli_connect_error();
//}

//if($debug_mode > 1){
//    echo "Prisijungete prie DB sekmingai!!! <br/>";
//}

function getDoctor($p,$id) {
    $rez = mysqli_query($p, "SELECT * FROM doctors WHERE id = '$id'");
    $masyvas = mysqli_fetch_assoc($rez);
    return $masyvas;
  //  print_r($masyvas["lname"]);
}
//$gydytojasArray = getDoctor($prisijungimas,2);






//        foreach ($masyvas as $x){
//            echo $masyvas ["lname"];
//print_r($masyvas, "name");
//            }
//
