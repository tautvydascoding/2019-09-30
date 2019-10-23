<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

<h1>MOKOMES php klasisu paveldimuma</h1>

<?php
 include_once('vilkas.php');

   // UZDUOTIS 2.0:
  // sukurti VILKO OBJEKTA ir
  // pabandyti isvesti visa info apie Vilka:
  // tipas
  // svoris,
  // ligos     // klaida
  // pusryciai // klaida
  $Pilkis = new Vilkas("usurinis", 55, "sirdies yda");

  echo "tipas: " . $Pilkis->tipas  . "<br />";
  echo "svoris: " . $Pilkis->svoris. "<br />";
  // niekada nepavyks index.php faile isvesti private arba protected kintamuju
  // echo "ligos: " .  $Pilkis->ligos . "<br />";
  // echo "pusryciai: " . $Pilkis->pusryciai. "<br />";

// TAM KAD PASIEKTI PUSRYCIUS IR LIGAS
// SUPORGRAMUOJAM F-JAS public:
 // public printLigos()
 // public printPusryciai()

  // UZDUOTIS 3
  // klaseje 'Vilkas' sukurti f-jas:
  // public printLigos()
  // public printPusryciai() // neveiks
  $Pilkis->printLigos();
  // niekada nepavyks   isvesti private arba protected kintamuju. Spendimas, i tevo klases ideti public f-ja
  // $Pilkis->printPusryciai();

  // UZDUOTIS 4
  // klaseje 'Gyvunas' sukurti f-jas:
  // public printPusryciai()

 $Pilkis->printPusryciai();
 ?>




    </body>
</html>
