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
        <h1>Prekes is txt failo</h1>

<!--UZDUOTIS-->
<!--        1. Nuskaityti faila prekes.txt-->
<!--        2. pasitestuoti-->
<!--        3. Sudeti prekes i Array-->
<!--        3. Isvesti i ekrana-->

        <?php
        $visosPrekesMasyvas=[];
        $prekiuFailas = fopen("prekes.txt", "r") or die("Nepavyko nuskaityti failo!");
        // Output one line until end-of-file

        $i=0;
        while(!feof($prekiuFailas)) {
//            echo fgets($prekiuFailas) . "<br>";

            $eiluteString = fgets($prekiuFailas);

            $preke_array = explode(";", $eiluteString);

            $visosPrekesMasyvas[$i] = $preke_array;
            $i++;
//            print_r($preke_array);
//            "<br>";
//            $visosPrekesMasyvas[i] = $eiluteString;
//            $i++;
//            echo Preke."$i" . "<br>";
        }
        print_r($visosPrekesMasyvas);
        fclose($prekiuFailas);

        for ($i=0; $i<count($visosPrekesMasyvas); $i++){
            echo "<h2> {$visosPrekesMasyvas[$i][0]} </h2>";
            echo "<p> {$visosPrekesMasyvas[$i][3]} </p>";
            echo "<button> {$visosPrekesMasyvas[$i][1]} </button>";
            echo "<div> liko: {$visosPrekesMasyvas[$i][2]} </div>";
        }
        
        

//print_r($visosPrekesMasyvas);

        ?>


        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
<!--        <script type="text/javascript" src='main.js'> </script>-->
    </body>
</html>
