<!DOCTYPE html>
<html lang="en">
<head>
    <title>7 uzduotis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>
<body>


<h1>Muzikos prekės</h1>

<?php

include ('model/db_kategorijos_functions.php');
$visosKategorijosMYSQL_Objektas = getKategorijos();


// su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
$kategorija_Masyvas = mysqli_fetch_assoc($visosKategorijosMYSQL_Objektas);



// su while ciklu atspausdinsim visas kategorijas

while ($kategorija_Masyvas){
    $kategorijaCikle = $kategorija_Masyvas['kategorija'];
    $foteCikle = $kategorija_Masyvas['foto'];
    echo "<h3>{$kategorija_Masyvas['pavadinimas']} </h3> <br/>
 <a  href = 'kategorija.php?kategorija=$kategorijaCikle' > <img src='foto/kategorijos/$foteCikle'> </a>";
    echo "<br>";
    $kategorija_Masyvas = mysqli_fetch_assoc($visosKategorijosMYSQL_Objektas);
}


?>






</body>
</html>



<?php


