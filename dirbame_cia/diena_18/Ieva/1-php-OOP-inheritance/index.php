<?php
  // UZDUOTIS 2.0:
 // sukurti VILKO OBJEKTA ir
 // pabandyti isvesti visa info apie Vilka:
 // tipas
 // svoris,
 // ligos     // klaida
 // pusryciai // klaida

include("vilkas.php");

$Vilkas = new Vilkas();
// print_r($Vilkas);

// echo "tipas: $Vilkas->tipas <br> 
//         svoris: $Vilkas->svoris <br> 
//         ".$Vilkas->printLigos();


$Vilkas->tipas = "pilkasis";

$Vilkas->svoris = 100;

//$Vilkas->ligos = "sirdies"; //protected
//$Vilkas->pusryciai = "mazi zuikiai";// naujai susikuria

// echo "tipas: $Vilkas->tipas <br> svoris: $Vilkas->svoris <br> pusryciai: $Vilkas->pusryciai";

echo "tipas: $Vilkas->tipas <br> svoris: $Vilkas->svoris <br>";
$Vilkas->printLigos();
$Vilkas->printPusryciai();

 // UZDUOTIS 3
 // klaseje 'Vilkas' sukurti f-jas:
 // public printLigos()
 // public printPusryciai() // neveiks



 // UZDUOTIS 4
 // klaseje 'Gyvunas' sukurti f-jas:
 // public printPusryciai()
?>