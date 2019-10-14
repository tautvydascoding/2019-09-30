<?php
// 1. sukurti index.php
// 2. parasyti PHP koda:
    //  susikurti masyv1- preke1: kaina, pavadinimas, kiekis
    $numeris = $_GET['x'];
    echo "numeris: $numeris <br />";
    echo $preke1[$numeris] . "<hr />";
// 3. pasileisti Narsykleje si puslapi
// 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
     ?x=1
 // 4. Narsykles adrese  pakeisti ?x=0
 // 4. Narsykles adrese  pakeisti ?x=2
 // ir paziureti kas bus

// 5.===============sunkesnis====================
 // A)  susikurti dar 2 masyvus  preke2, prek3
 // B) susikurti masyva 'visosPrekes'
 // C) sudeti visas prekes i masyva 'visosPrekes'
 // 6. parasyti PHP koda:
     $numeris = $_GET['x'];
     $manoPreke =  $visosPrekes[$numeris];
     print_r($manoPreke);
     echo "<hr />";
 // 7. pasileisti Narsykleje si puslapi
 // 3.1 Narsykles adreso ivedimo lange (paciam gale) prirasyti :
      ?x=1
  // 4. Narsykles adrese  pakeisti ?x=0
  // 4. Narsykles adrese  pakeisti ?x=2
  // ir paziureti kas bus
