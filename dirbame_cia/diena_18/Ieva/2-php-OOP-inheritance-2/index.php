<?php

// UZDUOTIS 0.
// susikurti objekta VYRAS
include("vyras.php");

$Mantas = new Vyras();
// print_r($Mantas); //test

$Mantas->setTestosterone(7000);

$Mantas->printTestosterone();

$Mantas->printVyroDuomenys();
