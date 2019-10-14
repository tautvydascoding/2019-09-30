<?php


// 1. sukurti tuscia porjekta (default)

// 2. doctor.php faile parasyti PHP koda:
    $numeris = 2;
    $gydytojas = getDoctor( $numeris);

    echo $gydytojas[1] .  $gydytojas[2] ;
    echo $gydytojas["name"] .  $gydytojas['lname'] ;


// 3. pasileisti Narsykleje si puslapi (doctor.php ne index.php, Narsykles adreso ivedimo lange (paciam gale) prirasyti : doctor.php)
// 3.1 istaisyti klaida: function 'getDoctors' not found
// 3.1.1 isideti i projekta faila: db_functions.php

// 3.1.2  i  faila  doctor.php parasyti:
include('db_functions.php');

// 4. faile  pakeisti $numeris = 3;
// 4. faile  pakeisti $numeris = 4;
// ir paziureti kas bus
