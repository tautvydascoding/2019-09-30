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
        $vardas1pirmumas = '';
        $vardas_pirmumo = '';
        $textas = "textas textas $vardas textas"; //'' neveiks $

        echo $textas;
        ?>
<!-- // PASIZIURETI KAS YRA PHP, js "Switch"
// UZDUOTIS  "Switch"
// paduoti varda ir Jeigu jis lygus:
// "audi" - atspausdinti "Susimastykite apie variklio prieziura"
// "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
// "opel" - atspausdinti "Susimastykite apie naujus priedus" -->

        <?php $auto = 'opel'; $taisymas = trim($vartotojoivestis); $auto = strtolower($auto); $vartotojoIvestis = htmlspecialchars($vartotojoIvestis, ENT_QUOTES); 
// strtolower(trim(htmlspecialchars($vartotojoIvestis), ENT_QUOTES));
        switch($auto) {
            case 'audi' : echo "Susimastykite apie variklio perziura";
            break;
            case 'opel' : echo "Susimastkite apie kazka";
            break;
        }
        ?>
        
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
