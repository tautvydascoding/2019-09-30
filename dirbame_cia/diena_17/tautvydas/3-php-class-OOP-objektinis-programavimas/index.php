<?php

include('zmogus.php');

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas

$Monika = new Zmogus();  // obj-to kurimas
$Antanas = new Zmogus();  // obj-to kurimas


// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179
$Monika->vardas = "Monika"; // kintamojo keitimas
echo "Monikos vardas: $Monika->vardas  <br />";
$Monika->ugis = 165; // kintamojo keitimas
echo "Monikos ugis: $Monika->ugis  <br />";

$Antanas->vardas = "Antanas"; // kintamojo keitimas
echo "Antanas vardas: $Antanas->vardas  <br />";
$Antanas->ugis = 199; // kintamojo keitimas
echo "Antanas ugis: $Antanas->ugis  <br />";

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'
$Antanas->einu();
