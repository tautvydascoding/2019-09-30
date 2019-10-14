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
        <h1>Isijunk console (narsykleje)</h1>

        <?php
          $vardas = 'tomas';
          $tekstas ="Raundonas $vardas <br />";
          echo $tekstas;
          echo "Tomas";
          print("tekstas");
          print_r("spausdina ir teksta");
          var_dump($vardas);
          $masyvas = [];

          $vardas = "Tomas";
          $pavarde = "Tomskis";
          $tekstas = "Duomenys" . $vardas . $pavarde; // string sulipdymas

          // PASIZIURETI KAS YRA PHP, js "Switch"



            // UZDUOTIS  "Switch"
           // paduoti varda ir Jeigu jis lygus:
           // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
           // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
           // "opel" - atspausdinti "Susimastykite apie naujus priedus"
$vartotojoIvestis = "bMw  ";
$vartotojoIvestis = htmlspecialchars( $vartotojoIvestis, ENT_QUOTES );
$auto = trim($vartotojoIvestis); // pasalinami tarpai ir tabai aplink
$auto = strtolower($auto); // paimam modifikuota kintamaji ir ji dar karta modifikuojam i mazasis raides

$auto = strtolower(trim(htmlspecialchars($vartotojoIvestis), ENT_QUOTES));

switch ($auto) {
  case 'audi':
    echo "Susimastykite apie variklio prieziura";
    break;
  case 'bmw':
    echo "Susimastykite apie greiti ir vairavimo kultura";
    break;
  case 'opel':
    echo  "Susimastykite apie naujus priedus";
    break;
  default:
    echo "Iveskite kita branda, '$auto' mes neradome";
    break;
}
        ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
