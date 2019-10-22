<?php

include('zmogus.php');

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas
// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179
// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'

$Monika = new Zmogus();
$Monika->ugis = "155";
$Monika->vardas = "Monika";
echo $Monika->einu();

$Tadas = new Zmogus();
$Tadas->ugis = "180";
$Tadas->vardas = "Tadas";
echo $Tadas->einu();

$Kestas = new Zmogus();
$Kestas->ugis = "179";
$Kestas->vardas = "Kestas";

