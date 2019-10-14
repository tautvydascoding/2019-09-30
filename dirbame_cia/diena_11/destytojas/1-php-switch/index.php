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
        $vardas = 'Tomas';
        $vardas1pirmuno = '';
        $vardas_pirmuno = '';
        $tekstas1 = "Raudonkepurai ejo ir sutiko $vardas apsidodziavo ir nuejo<br />";
        $tekstas2 = 'Raudonkepurai ejo ir sutiko $vardas apsidodziavo ir nuejo<br />';
        echo "TOmas";  // atspausdinimas
        echo $tekstas1;  // atspausdinimas
        echo "$tekstas1";  // atspausdinimas
        echo $tekstas2;
        $masyvas = [];
        // PHP 5.5 , 5.6    ->  7.0    ~2 metu begi

        $vardas = 'Tomas';
        $pavarde = 'Tomauskis';
        $tekstas = "Duomenys: " . $vardas . $pavarde . "<br>";  // string sulipdytas i viena

        // UZDUOTIS  "Switch"
       // paduoti varda ir Jeigu jis lygus:
       // "audi" - atspausdinti "Susimastykite apie variklio prieziura"
       // "BMW" - atspausdinti "Susimastykite apie greiti ir vairavimo kultura"
       // "opel" - atspausdinti "Susimastykite apie naujus priedus"
       $vartojoIvestis = ' bMw   ';
       $vartojoIvestis = htmlspecialchars( $vartojoIvestis, ENT_QUOTES );
       $auto = trim($vartojoIvestis);  // pasalinami tarpai ir tabai aplink teksta
       $auto =  strtolower($auto);     // sumazinam raides

       // $auto = strtolower(trim(htmlspecialchars($vartojoIvestis), ENT_QUOTES) );
       switch ($auto) {
           case 'audi':
                     echo "Susimastykite apie variklio prieziura";
               break;
           case 'bmw':
                     echo "Susimastykite apie greiti ir vairavimo kultura";
               break;
           case 'opel':
                     echo "Susimastykite apie naujus priedus";
               break;
           default:
                    echo "Tokios '$auto' mes nezinome";
                    echo "Tokios \"$auto\"  mes nezinome";
               break;
       }
         ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
