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
        $preke1 = ['Gera', '1.jpg', 200, 'text text text text'];
        $preke2 = ['Labai gera', '2.jpg', 300, 'text text text text'];
        $preke3 = ['Geresne', '3.jpg', 400, 'text text text text'];
        $preke4 = ['Geriausia', '4.jpg', 500, 'text text text text'];
        $prekes = [$preke1, $preke2, $preke3, $preke4];
        
        foreach($prekes as $p) { ?>
        <article>
            <h2><?= $p[0]?></h2>
            <img src='img/<?=$p[1]?>' width="25%">
            <p><?= $p[3]?></p>
            <button><?= $p[2]?></button>
        </article>
       <?php } ?>

        
<!-- 
// UZDUOTIS 2 --------------
    // sukurti matrica, kurioje bus saugoma kiekvienos prekes info:
    // Antraste, img pavadinimas, kaina, prekes aprasymas

    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    // B. i masyva visosPrekes, ideti "preke" masyva
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach) ir bootstrap dizaina -->
    <!-- // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]); -->

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
