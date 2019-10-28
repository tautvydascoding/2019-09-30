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

$id = $_GET['id'];


//echo "<h1>Prekės pagal kategorija</h1>";

$PrekePagalIdMasyvas = getPrekePagalId($id);




//    $idCikle = $PrekesPagalKategorija_Masyvas['id'];
    $foto = $PrekePagalIdMasyvas['img_big'];
    $pavadinimas = $PrekePagalIdMasyvas['pavadinimas'];
    $kaina = $PrekePagalIdMasyvas['kaina'];
    $aprasymas = $PrekePagalIdMasyvas['aprasymas'];
    $fotoKatalogas = $PrekePagalIdMasyvas['kategorija'];

        echo "
    <div class='template_preke'>

   <!--isvedu prekes pavadinima-->
  <div class='pavadinimas'><h2>$pavadinimas</h2></div>


    <!--isvedu nuotrauka img big-->
  <img src='foto/$fotoKatalogas/$foto' alt='$fotoKatalogas'>
  
  
    <!--isvedu prekes kaina-->
    <div class='kaina'><h4>Prekės kaina: $kaina </h4></div>
    <div class='aprasymas'><h6>Prekės aprašymas: $aprasymas </h6></div>
    
 
</div>
";



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


