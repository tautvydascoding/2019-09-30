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
        <h1>Paveldimumas klasese</h1>
<!--        // UZDUOTIS 1.0:-->
<!--        // sukurti klase 'Gyvunas' su kintamaisiais:-->
<!--        // public 'svoris', private 'pusryciai', protected 'ligos'-->
<!---->
<!--        // UZDUOTIS 1.1-->
<!--        // sukurti klase 'Vilkas' su kintamaisiais:-->
<!--        // public 'tipas'-->
<!---->
<!--        // UZDUOTIS 1.2-->
<!--        // klase 'Vilkas' paveldi klase 'Gyvunas'-->
        <?php

        include_once ("Gyvynas.php");
        include_once ("Vilkas.php");


        // UZDUOTIS 2.0:
        // sukurti VILKO OBJEKTA ir
        // pabandyti isvesti visa info apie Vilka:
        // tipas
        // svoris,
        // ligos     // klaida
        // pusryciai // klaida

        // UZDUOTIS 3
        // klaseje 'Vilkas' sukurti f-jas:
        // public printLigos()
        // public printPusryciai() // neveiks

        // UZDUOTIS 4
        // klaseje 'Gyvunas' sukurti f-jas:
        // public printPusryciai()

        $Vilko_objektas = new Vilkas();
        echo $Vilko_objektas->tipas;
        echo $Vilko_objektas->svoris;
        $Vilko_objektas->printPusryciai();
        $Vilko_objektas->printLigos();


//        echo $Vilko_objektas->ligos;
//        echo $Vilko_objektas->pusryciai;




        ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
