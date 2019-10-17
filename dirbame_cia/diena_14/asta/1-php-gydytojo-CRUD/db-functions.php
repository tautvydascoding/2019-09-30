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
//prisijungia prie DB ir grazina fann_get_total_connections
//return DB prisijungima
function getPrisijungimas(){
  global $prisijungimas;  //paimam globalia reiksme
  if ($prisijungimas) {
  //echo "Prisijungete prie DB <br/>";
  return $prisijungimas;
  } else {
  echo "ERROR nepavyko prisijungti <br />".mysqli_connection_error();
}
}
getPrisijungimas();

$rezultataiMySQLObjektas=mysqli_query(getPrisijungimas(), "Select * From doctors");
$rezultataiArray=mysqli_fetch_assoc($rezultataiMySQLObjektas); //is grizusiu duomenu pasiima tik viena eilute

//if ($masyvas["id"] ==2 ) {
foreach ($rezultataiArray as $masyvoTurinys){

//echo $masyvas["name"];
}



// function getDoctor( $nr) {
//
//     $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM doctors WHERE id = '$nr'");
// //pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
//     if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if
//
//     $rezultataiArray = mysqli_fetch_assoc($rezultataiMySQLObjektas);
//     return $rezultataiArray;
//   } else {
//     echo "Duomenu negavau gydytojo: $nr".mysqli_error(getPrisijungimas());
//     return NULL;
//   }
// }

// $gydytojasArray = getDoctor( 2); // test papimam id=4 gydytoja
//
// print_r($gydytojasArray); // test
// echo "<br>"."Vardas: " . $gydytojasArray['name'] . "<br>";
// echo "Vardas:  {$gydytojasArray['name']}  <br>";

//INSERT INTO doctors VALUES (NULL, 'Juozas', 'Juozaitis')

function createDoctor($name, $lname){
  $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"INSERT INTO doctors VALUES (NULL, '$name', '$lname')");
  if (!$rezultataiMySQLObjektas){
    echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
  }

}
//createDoctor('Jonas', 'Jonaitis');
//createDoctor('Kestas', 'Kestaitis');
//DELETE from doctors where id=''

// function deleteDoctor($nr){
//
// $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"DELETE FROM doctors
//                                                                     WHERE id ='$nr'
//                                                                     LIMIT 1");
// if (!$rezultataiMySQLObjektas){
//   echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
// }
// }
// deleteDoctor(12);

//gydytojo duomenu koregavimas

// function updateDoctor($nr,$name, $lname){
//
// $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"UPDATE doctors
//                   SET name = '$name', lname = '$lname'
//                   WHERE id ='$nr'  ");
// if (!$rezultataiMySQLObjektas){
//   echo "ERROR:mano SQL sintakses klaidos:".mysqli_error(getPrisijungimas());
// }
// }
// updateDoctor(10, 'Viktoras', 'Gerulaitis');

//visu gydytoju isvedimas

// function getDoctors( $kiekis = 999999999) {
//
//     $rezultataiMySQLObjektas = mysqli_query(getPrisijungimas(),"SELECT * FROM doctors ");
// //pasitikrinam ar grizo kazkas is DB,  kad zinot ar nepadarem klaidu
//     if ($rezultataiMySQLObjektas){  //mysqli_num_rows($rezultataiMySQLObjektas) galima tikrinti ar gavome duomenu, sia komanda reiketu ikelti i if vidu su dar vienu if
//
//         return $rezultataiMySQLObjektas;
//   } else {
//     echo "Duomenu negavau gydytojo: $nr".mysqli_error(getPrisijungimas());
//     return NULL;
//   }
// }
// $visiGydytojaiMYSQL_Objektas = getDoctors();
//
// $gydytojas_Array=mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);
// while($gydytojas_Array) {
// print_r($gydytojas_Array);
// echo "<br>";
// $gydytojas_Array=mysqli_fetch_assoc($visiGydytojaiMYSQL_Objektas);
// }
//print_r($visiGydytojaiMYSQL_Objektas);
//}
