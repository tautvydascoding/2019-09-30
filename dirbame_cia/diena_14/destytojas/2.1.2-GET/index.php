<h1> prekius isvedimas keiciants URL adresa</h1>

<?php

// 1. sukurti index.php
// 2. parasyti PHP koda:
    //  susikurti masyv1- [ kaina, pavadinimas, kiekis];
    $preke1 = [ 100, "paspirtukas", 33];

    $numeris = $_GET['x'];  // informacija is URL adreso
    echo "numeris: $numeris <br />";
    echo $preke1[$numeris] . "<hr />";  // prekes informacija

// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
     // ?x=1
 // 4. Narsykles adrese  pakeisti ?x=0
 // 4. Narsykles adrese  pakeisti ?x=2
 // ir paziureti kas bus

// 5.===============sunkesnis====================
 // A)  susikurti dar 2 masyvus  preke2, prek3
 $preke2 = [ 299, "paspirtukas XL", 5];
 $preke3 = [ 399, "paspirtukas Elektrinis", 2];

 // B) susikurti masyva 'visosPrekes'
  $visosPrekes = [];
 // C) sudeti visas prekes i masyva 'visosPrekes'
 $visosPrekes = [$preke1, $preke2, $preke3];
 // 6. parasyti PHP koda:
     $numeris = $_GET['x']; // info is URL adreso
     $manoPreke =  $visosPrekes[$numeris];
     echo "<hr />";
     print_r($manoPreke);
     echo "<hr />";
 // 7. pasileisti Narsykleje si puslapi
 // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
      // ?x=1
  // 4. Narsykles adrese  pakeisti ?x=0
  // 4. Narsykles adrese  pakeisti ?x=2
  // ir paziureti kas bus

 ?>
