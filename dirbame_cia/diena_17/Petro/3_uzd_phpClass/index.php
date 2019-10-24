<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>PHP 3 uzdavinys klases kurimas</h1>

        <?php
        // UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas
        // UZDUOTIS 2.1
//        Monikos objektui priskirti reiksmes: Monika, 155
//Tado objektui priskirti reiksmes: Tadas, 180
//Kesto objektui priskirti reiksmes: Kestas, 179

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'
        include_once ("classZmogus.php");

        $Monika = new Zmogus();
        $Monika->vardas = 'Monika';  // kintamojo keitimas
        echo "Monikos vardas: $Monika->vardas"."<br/>";
        $Monika->ugis = 155; // kintamojo keitimas
        echo "Monikos ugis: $Monika->ugis";



       $Monika->einu();

        ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
