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
    // A. sukurti masyva preke: Antraste, img pavadinimas, prekes aprasymas, kaina
    $preke1 = ["Dviratis", '1.jpg', "Puikus dviratis", 199];
    $preke2 = ["Riedlente", '2.jpg', "medine riedlente", 299];
    $preke3 = ["paspirtukas", '3.jpg', "125mm ratuku su stabdziais", 99];
    // B. i masyva visosPrekes, ideti "preke" masyva
    $visosPrekes  = [ $preke1, $preke2, $preke3];
    // C. atvaizduodi kiekvienoje eiluteje po 3 prekes (naudojant for arba foreach)
    // ir bootstrap dizaina
    // <article clas='col-...'>
    //     <h2> ...
    //     <img>
    //     <p>...
    //     <button> ...
    //     <a class="btn btn-lg  bg-info"> </a>
    // </article>
    foreach ($visosPrekes as  $vienoStalciausTurinysArray) {
        // print_r($vienoStalciausTurinysArray); break;  // test kokius duomenis turiu
        echo "<h2>$vienoStalciausTurinysArray[0]  </h2>";
        echo "<p>$vienoStalciausTurinysArray[2]  </p>";
        echo "<button>$vienoStalciausTurinysArray[3]  </button>";
    }

       // 3 budai nuotraukoms
        // printf("<img src='./img/" . $visosPrekes[$i][1] . "' width='200px;' alt=''  />");
        // printf("<img src='./img/%s' width='200px;' alt=''  />", $visosPrekes[$i][1]);

require_once('footer.php');
require_once('footer.php');
require_once('footer.php');
 ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
