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
            include("db_functions.php");
            
            // $daktarai = getDoctor($prisijungimas, 1);
            // print_r($daktarai);

            // foreach($daktarai as $d) {
            //     echo $d;
            // }

            // for($i = 0; $i < 10; $i++) {
            //     $rez = mysqli_query($prisijungimas, "SELECT * FROM doctors WHERE id='$i'");
            //     $masyvas = mysqli_fetch_assoc($rez);
            //     print_r("<h2><em>{$masyvas['id']}</em> {$masyvas['name']} {$masyvas['lname']}</h2>");
            // }
            echo "<div class='row'>";
            for($i = 1; $i < 6; $i++) {
                $masyvas1 = getDoctor($prisijungimas, $i);
                include("template-item.php");
            }
            echo "</div>"
            ?>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
