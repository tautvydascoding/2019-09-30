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
        
    <main>
        <h1>Mano prekes</h1>  
    </main>

    <div class = "prekes">
        <?php 

        $kaina = 269;
        $antraste = "Good cat";
        $aprasymas = " Balta, silta ir kokybiska. ko tik sirdis geidzia.";
        
        for ($x = 0; $x <6; $x++) {
        include("template-preke.php");   
        }

        
        ?>
    </div>

    <br>

        
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
