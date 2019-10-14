<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (nars)</h1>

        <?php
        $vardas = 'tomas';
        $vardas1pirmuno = '';
        $vardas_pirmuno = '';
        $tekstas1 = "Raudonkepuraite ejo ir sutiko $vardas apsizodziavo <br />";
        $tekstas2 = 'Raudonkepuraite ejo ir sutiko $vardas apsizodziavo <br />';
        echo $tekstas1; //atspausdinimas
        echo "$tekstas1"; //atspausdinimas tas pats kas ir virsutine eilute
        echo "$tekstas2";
        echo "Tomas";
      //  $masyvas = [];

        //$vardas = 'Tomas';
        //$pavarde = 'Tomauskis';
        //$tekstas = "Duomenys:" . $vardas .$pavarde . <br />; //string sulipdymas




        // PASIZIURETI KAS YRA PHP, js "Switch"



          // UZDUOTIS  "Switch"
         // paduoti varda ir Jeigu jis lygus:
         // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
         // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
         // "opel" - atspausdinti "Susimastykite apie naujus priedus"

$vartotojoIvestis = ' bMw';
$vartotojoIvestis = htmlspecialchars( $vartotojoIvestis, ENT_QUOTES);
$auto = trim($vartotojoIvestis);  //ismeta tarpus
$auto = strtolower($auto);  //pakeicia i mazasias raides

$auto = strtolower(trim(htmlspecialchars($vartotojoIvestis,ENT_QUOTES )));
switch ($auto) {
  case 'audi':
    echo "variklio prieziura";
  case 'bmw':
    echo "salono prieziura";
  default:
    echo "'$auto' neturit";
    echo "$auto neturit";

}

?>

<?php ?>

        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
