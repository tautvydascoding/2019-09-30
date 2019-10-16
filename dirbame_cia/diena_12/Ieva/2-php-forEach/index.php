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

        $zmogus = [

            "vardas" => "Tomas",
            "amzius" => 21,
            "tel" => 855586
        ];
        
        // print_r($zmogus); //test
        // echo "<hr>";
        // var_dump($zmogus); //test

        foreach ($zmogus as $key_index => $masyvoStalciausTurinys) {
            echo "Stalciaus pavadinimas: $key_index <br>";
            echo "Stalciaus reiksme: $masyvoStalciausTurinys <hr>";
        }



        ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>




    