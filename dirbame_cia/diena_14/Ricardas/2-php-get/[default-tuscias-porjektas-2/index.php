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
        // $x = $_GET['aaa'];
        // echo $x;
        $preke1 = [200, 'Puodelis', 20];

        // $numeris = $_GET['x'];
        // echo "numeris: $numeris <br />";
        // echo $preke1[$numeris] . "<hr />";


        // 1. sukurti index.php
        // 2. parasyti PHP koda:
            //  susikurti masyv1- preke1: kaina, pavadinimas, kiekis
        // $numeris = $_GET['x'];
        // echo "numeris: $numeris <br />";
        // echo $preke1[$numeris] . "<hr />";
        // 3. pasileisti Narsykleje si puslapi
        // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
            // ?x=1
        // 4. Narsykles adrese  pakeisti ?x=0
        // 4. Narsykles adrese  pakeisti ?x=2
        // ir paziureti kas bus

        // A)  susikurti dar 2 masyvus  preke2, prek3
        $preke2 = [100, 'Du puodeliai', 40];
        $preke3 = [150, 'Trys puodeliai', 30];
        $visosPrekes = [$preke1, $preke2, $preke3];

        // B) susikurti masyva 'visosPrekes'
        // C) sudeti visas prekes i masyva 'visosPrekes'
        // 6. parasyti PHP koda:
            $numeris = $_GET['x'];
            $manoPreke =  $visosPrekes[$numeris];
            print_r($manoPreke);
            echo "<hr>";
        // 7. pasileisti Narsykleje si puslapi
        // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
            // ?x=1
        // 4. Narsykles adrese  pakeisti ?x=0
        // 4. Narsykles adrese  pakeisti ?x=2
        // ir paziureti kas bus

        ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>