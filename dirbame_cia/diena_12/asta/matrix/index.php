<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (narsykleje)</h1>


<?php
     ////
             // UZDUOTIS 1.1
             // isvesti visa informacija apie pirma darbuotoja (naudojant FOR cikla)
             //for($i=0; $i<10; $i++){
 //echo $visiDarbuotojai[0]
             // UZDUOTIS 1.2
             // isvesti visu  darbuotoju tik vardus (naudojant FOR cikla)
             // UZDUOTIS 1.3
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant VIENA FOR cikla)
             // UZDUOTIS 1.4
             // isvesti visa informacija apie kiekviena  darbuotoja  (naudojant DU FOR ciklus)


            // UZDUOTIS 2 --------------
            // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
            // Antraste, img pavadinimas, kaina, prekes aprasymas
$visosPrekes = ["Antraste", "img_pavadinimas", "kaina", "prekes_aprasymas"];

            // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
            $prekes1 = ["Zaislas", "5.jpg", 23, "geras zaislas"];
            $prekes2 = ["Laikrodis", "6.png", 20, "tiesiog laikrodis"];
            $prekes3 = ["kompiuteris", "balionas.png", 10, "sioks toks"];
            // B. i masyva visosPrekes, ideti "preke" masyva
            $visosPrekes[0]=$prekes1;
            $visosPrekes[1]=$prekes2;
            $visosPrekes[2]=$prekes3;
             ?>
            // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina
<article>
    <h2>
<?php
              foreach ($visosPrekes as  $value) {
              echo "$value[0] $value[2] $value[3] <img src='img/$value[1]' width='25%'  />";

            }
 ?>
 <?php
               foreach ($visosPrekes as  $value) {
               echo "<h2>$value[0]</h2>";
               echo "<p>$value[3]</p>";
               echo "<button> $value[2]</button>";

             }

require_once('footer.php');  // viena karta ikeliamas failas galima naudoti ir include
require_once('footer.php');
require_once('footer.php');
  ?>
 </h2>
 </article>
<!--
               // 3 budai nuotraukoms
                // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
                // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);


-->

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
