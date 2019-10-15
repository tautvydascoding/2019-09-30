<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- mano css failas visada pats zemiausias -->
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>
        <h1>Isijunk console (narsykleje)</h1>

        <div>
        <?php
        $kaina = 30000;
        $antraste = "TURBO <br>";
        $aprasymas = "Geriausias is geriausiu <br>"; 
        

        for($i = 0; $i < 6; $i++){
            include("template-preke.php");
        };
        ?>
        </div>

        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
