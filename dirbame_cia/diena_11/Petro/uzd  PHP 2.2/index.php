

Susikurti 2 failus:

template-preke.php
index.php


// UZDUOTIS:
// 1: sukurti "template-preke.php" faila
// h2 (antraste)
// p (aprasymas)
// button (Kaina)

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <h1>UZDAVINYS 2.2</h1>

        <div class="container" >
            <div class="row">
                <div class="col-sm-8">
                    <?php
                    $kaina = 25;
                    $antraste = 'Batai';
                    $aprasymas = 'Puikus';

                    for ($i=0; $i<6; $i++){
                        include ("template-preke.php");
                    }



                    ?>
                 </div>
            </div>
        </div>


    </body>
</html>


<!--// 2) sukurti index.php su "<!Doctype html body" (ideti container ir row su bootatrap)-->
<!---->
<!--// 2.2) index.php-->
<!--// sukurti kintamuosius:-->
<!--// $kaina = ...;-->
<!--// $antraste = ...;-->
<!--// $aprasymas = ...;-->
<!--// 3) template-preke.php faile   isvesti kintamuosius $kaina, $antraste, $aprasymas-->
<!--//pvz-->
<!--//<h2> -->
<!--// 3.2) index.php faile!! - paleisti FOR cikla 6 kartus include('template-preke.php');-->
