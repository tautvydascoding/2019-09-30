<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet"  href="css/style.css">
    </head>
    <body>

        <h1>Poliklinika - visi gydytojai</h1>

        <div id="zinute"><?=$GLOBALS['zinute'];?></div>


        <a href='create-doctor-form.php' class="btn btn-outline-success new"> Naujas Gydytojas</a>
    <hr>
        <div class="daktarai"> 
        <?php
        include_once("db_functions.php");

        $visiGydytojai_Objektas = getDoctors();

        $gydytojas_Array = mysqli_fetch_assoc($visiGydytojai_Objektas);

        while ($gydytojas_Array) {
            // print_r( $gydytojas_Array); //test
            echo "<h4> <a href='doctor.php?nr={$gydytojas_Array['id']}'> {$gydytojas_Array['name']} {$gydytojas_Array['lname']} </a> </h4>";
            echo "<a href='edit-doctor-form.php?id={$gydytojas_Array['id']}' class='btn btn-outline-warning'> Atnaujinti </a>";
            echo "<a href='trintiGydytoja.php?id={$gydytojas_Array['id']}' class='btn btn-outline-danger'> Trinti </a>";
            echo "<hr>";

            $gydytojas_Array = mysqli_fetch_assoc($visiGydytojai_Objektas);
            }
            
        ?>

        </div>

       
        <script type="text/javascript" src='libs/jquery-3.4.1.min.js'> </script>
        <!-- mano js failas visada pats zemiausias -->
        <script type="text/javascript" src='main.js'> </script>
    </body>
</html>
