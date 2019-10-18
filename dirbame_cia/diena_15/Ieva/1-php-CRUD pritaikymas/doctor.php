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
<h1> Gydytojo asmeninis puslapis </h1>


<?php
include_once('db_functions.php');

$numeris = $_GET['nr'];

$gydytojas = getDoctor( $numeris);

// echo $gydytojas[1] . $gydytojas[2] ;
echo "Gydytojas: <br> <h3>".$gydytojas["name"]." ". $gydytojas['lname']."</h3> <hr>" ;

echo "<a href='edit-doctor-form.php?id={$gydytojas['id']}' class='btn btn-outline-warning'> Atnaujinti </a>";
echo "<a href='trintiGydytoja.php?id={$gydytojas['id']}' class='btn btn-outline-danger'> Trinti </a>";

?>

</body>
</html>
