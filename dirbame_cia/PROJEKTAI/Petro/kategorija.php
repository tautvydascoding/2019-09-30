<!DOCTYPE html>
<html lang="en">
<head>
    <title>7 uzduotis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<?php

include ('model/db_prekes_functions.php');

$kategorija = $_GET['kategorija'];




echo "<h1>Prekės pagal kategorija</h1>"

$visosPrekesPagalKategoraMYSQL_Objektas = getPrekesPagalKategorija($kategorija);


// su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
$PrekesPagalKategorija_Masyvas = mysqli_fetch_assoc($visosPrekesPagalKategoraMYSQL_Objektas);



// su while ciklu atspausdinsim visas kategorijas

while ($PrekesPagalKategorija_Masyvas){
    $idCikle = $PrekesPagalKategorija_Masyvas['id'];
    $fotoCikle = $PrekesPagalKategorija_Masyvas['img_small'];
    $fotoKatalogas = $PrekesPagalKategorija_Masyvas['kategorija'];
    //ivesti reiksme is img lenteles getfoto
    echo "<h3>{$PrekesPagalKategorija_Masyvas['pavadinimas']} </h3> <br/>
 <a  href = 'preke.php?id=$idCikle' > <img src='foto/$fotoKatalogas/$fotoCikle'> </a>";
    echo "<br>";
    $PrekesPagalKategorija_Masyvas = mysqli_fetch_assoc($visosPrekesPagalKategoraMYSQL_Objektas);
}


?>






</body>
</html>



<?php


