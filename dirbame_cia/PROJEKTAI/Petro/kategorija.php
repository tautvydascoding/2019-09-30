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

<?php

include ('model/db_prekes_functions.php');

$kategorija = $_GET['kategorija'];




echo "<h1>Prekės pagal kategorija</h1>";

$visosPrekesPagalKategorijaMYSQL_Objektas = getPrekesPagalKategorija($kategorija);


// su fetch paimam pirma MYSQL objekto eilute ir paverciam i tvarkinga pirmos eilutes masyva
$PrekesPagalKategorija_Masyvas = mysqli_fetch_assoc($visosPrekesPagalKategorijaMYSQL_Objektas);



// su while ciklu atspausdinsim visas kategorijas

while ($PrekesPagalKategorija_Masyvas){
    $idCikle = $PrekesPagalKategorija_Masyvas['id'];
    $fotoCikle = $PrekesPagalKategorija_Masyvas['img_small'];
    $fotoKatalogas = $PrekesPagalKategorija_Masyvas['kategorija'];
    echo "
    <div class='template_preke_pagal_kategorija'>
<!--isvedu nuotrauka img small-->
  <a  href='preke.php?id=$idCikle'>
    <img src='foto/$fotoKatalogas/$fotoCikle' alt='$fotoKatalogas'>
  </a>
   <!--isvedu prekes pavadinima-->
  <a  href='preke.php?id=$idCikle'>
    <div class='pavadinimas'>{$PrekesPagalKategorija_Masyvas['pavadinimas']}</div>
  </a>
    <!--isvedu prekes kaina-->
  <a  href='preke.php?id=$idCikle'>
    <div class='kaina'>{$PrekesPagalKategorija_Masyvas['kaina']}</div>
  </a>
</div>
";

    //imu sekancia preke is MYSQL objekto
    $PrekesPagalKategorija_Masyvas = mysqli_fetch_assoc($visosPrekesPagalKategorijaMYSQL_Objektas);
}


//<div class="template_preke_pagal_kategorija">
//isvedu nuotrauka img small
//  <a  href="preke.php?id=$idCikle">
//    <img src="foto/$fotoKatalogas/$fotoCikle" alt="$fotoKatalogas">
//  </a>
   //isvedu prekes pavadinima
//  <div class="pavadinimas">{$PrekesPagalKategorija_Masyvas['pavadinimas']}</div>
     //isvedu prekes kaina
//  <div class="kaina">{$PrekesPagalKategorija_Masyvas['kaina']}</div>
//</div>


//isvedu nuotrauka img small
//    echo "<a  href = 'preke.php?id=$idCikle'> <img src='foto/$fotoKatalogas/$fotoCikle'> </a>";
    //isvedu prekes pavadinima
//    echo "<a  href = 'preke.php?id=$idCikle' > <h3>{$PrekesPagalKategorija_Masyvas['pavadinimas']} </h3> </a> <br>";
    //isvedu prekes kaina
//    echo "<a  href = 'preke.php?id=$idCikle' > <h3>{$PrekesPagalKategorija_Masyvas['kaina']} </h3> </a> <br>";
    //imu sekancia preke is MYSQL objekto
//    $PrekesPag



//cho "<h3>{$PrekesPagalKategorija_Masyvas['pavadinimas']} </h3> <br/>
// <a  href = 'preke.php?id=$idCikle' > <h3>{$PrekesPagalKategorija_Masyvas['pavadinimas']} </h3> </a>";
//    echo "<br>";


?>






</body>
</html>



<?php


