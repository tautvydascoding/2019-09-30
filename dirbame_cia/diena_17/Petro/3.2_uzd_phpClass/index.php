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
        <h1>PHP 3.2 uzdavinys klases kurimas</h1>

        <?php

        // UZDUOTIS 2.1
        // susikurti  objektus: Monika

        // UZDUOTIS 2.2
        // Atspasudinti varda ir ugi naudojant
        // f-ja 'getmanoUgis()'
        // f-ja 'getmanoVardas()'


        // UZDUOTIS 3:
        // susikurti konstruktoriu

        // UZDUOTIS 3.1:
        // susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)

        include_once ("classZmogus.php");

      $Monika = new Zmogus();
//        $Monika->vardas = 'Monika'; niekada nesuveiks nes kintamasis yra private
//        $Monika->ugis = 155; niekada nesuveiks nes kintamasis yra private. reikia keisti per funkcijas
        $Monika -> setManoUgis(155);
        $Monika -> setManoVardas("Monika");
        echo $Monika -> getManoUgis()."<br/>";
        echo $Monika -> getManoVardas()."<br/>";

        include_once ("classZmogusKonstruktorius.php");

        $Petras = new ZmogusKonstruktorius(176, "Petras");

        echo $Petras->vardas.$Petras->ugis;

        ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
