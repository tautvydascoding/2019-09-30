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
        <h1>Isijunk console (narsykleje)</h1>
        <?php
        $manofailas = fopen("prekes.txt", "r") or die("nepaejo");
        
        
        $visosPrekes = [];//matrica
        $i = 0;//count
        while(!feof($manofailas)) { //iesko pabaigos
            $stringas = fgets($manofailas); //paima eilute(array)
            $array = explode(", ", $stringas); //isskaido pagal zenkla
            // echo $array[0];
            $visosPrekes[$i] = $array; // pagal count i matrica
            $i++; //didina count
        }
        fclose($manofailas);//uzdaro txt

        // print_r($visosPrekes);
        // echo $visosPrekes[0];
        // var_dump($visosPrekes);

        for($j = 0; $j < 3; $j++) {
            echo "<h2>{$visosPrekes[$j][0]}</h2>";
            echo "<p>Kaina {$visosPrekes[$j][1]}</p>";
            echo "<p>liko: {$visosPrekes[$j][2]}vnt.</p>";
            echo "<p>Tai yra {$visosPrekes[$j][3]}</p>";
        }
        ?>



        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
