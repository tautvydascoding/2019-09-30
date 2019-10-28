<?php


// UZDUOTIS 1.1
// sukurti klase 'Vilkas' su kintamaisiais:
// public 'tipas'

// UZDUOTIS 1.2
// klase 'Vilkas' paveldi klase 'Gyvunas'
include ('vilkas.php');  //include gyvunas nereikia, nes jis jau includintas i vilka

// UZDUOTIS 2.0:
// sukurti VILKO OBJEKTA ir
// pabandyti isvesti visa info apie Vilka:
// tipas
// svoris,
// ligos     // klaida
// pusryciai // klaida
$MiskoVilkas = new Vilkas();

$MiskoVilkas->tipas = "baltasis";
$MiskoVilkas->svoris = 25;
//$MiskoVilkas->ligos ="dantu skausmai";  //nepavyks priskirti, nes private
//$MiskoVilkas->pusryciai = "kiskis";

echo "tipas->$MiskoVilkas->tipas </br>";

//echo "svoris->$MiskoVilkas->svoris </br>"

$MiskoVilkas->printLigos();
$MiskoVilkas->printPusryciai();
// $Monika = new zmogus();
// // $Monika -> vardas = "Monika";
// // $Monika -> ugis = 155;   Siu duomenu tiesiogiai negali atspausdinti, nes jie yra privat
// // echo "vardas->$Monika->vardas <br />";
// // echo "ugis->$Monika->ugis <br />";
//
// //getManoUgis();
// //einu();
// $Monika->setManoVardas('Monika');
// $Monika->setManoUgis(18);
// echo $Monika->getManoUgis();
// echo $Monika->getManoVardas();











 ?>
