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

        $preke = ["Ante", "1.jpg", "prekes aprasymas", 22];
        $preke1 = ["aste1", "2.jpg", "prekes aprasymas1", 50];
        $preke2 = ["kate2", "3.jpg", "prekes aprasymas2", 220];

        $visosPrekes = [];
        $visosPrekes[0] = $preke;
        $visosPrekes[1] = $preke1;
        $visosPrekes[2] = $preke2;

        // // print_r($visosPrekes);
        ?>
        <?php
        foreach ($visosPrekes as $m):
        // print_r($m);
        // break; ?>
        <article class = "col-4">
        <h2> <?= $m[0]?> </h2>
        <img src='./img/<?= $m[1]?>' width='200px;' />
        <p> <?= $m[2]?> </p>
        <button type = "button"><?= $m[3]?></button>
        </article>
        <br>
         <?php endforeach; ?>
        
       

        

        <?php for ($i = 0; $i<count($visosPrekes); $i++):?>
        <article class = "col-4">
           <h2> <?= $visosPrekes[$i][0] ?> </h2>
           <img src='./img/<?= $visosPrekes[$i][1]?>' width='200px;' />
           <p> <?= $visosPrekes[$i][2] ?> </p>
           <button type = "button"><?= $visosPrekes[$i][3]?></button>
        </article>
        <br>
        <?php endfor;?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>

<!-- 
// UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina


       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->
