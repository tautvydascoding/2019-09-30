<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Poliklinika - visi gydytojai</h1>
<?php
    include_once('db_funtions.php');
    $visiGydytojai_Objektas = getDoctors();

    // fetch paima TIK viena eilute is OBJ ir pavercia i array
    $gydytojas_Array = mysqli_fetch_assoc($visiGydytojai_Objektas);
    while ($gydytojas_Array) {
        // print_r( $gydytojas_Array );  // test
        echo "<a href='doctor.php?nr={$gydytojas_Array['id']}'>
                    {$gydytojas_Array['name']}  {$gydytojas_Array['lname']}
             </a> <br />";

        $gydytojas_Array = mysqli_fetch_assoc($visiGydytojai_Objektas);
    }


 ?>

<form class="" action="index.html" method="post">

</form>

    </body>
</html>
