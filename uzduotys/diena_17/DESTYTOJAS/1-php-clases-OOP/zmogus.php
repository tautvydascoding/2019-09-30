<?php

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'
// zmogus turi: public ugis, public vardas
// f-ja 'einu()', kuri daro echo "Einu einu..."

// UZDUOTIS 2:
// susikurti  objektus: Monika, Tadas, Kestas


// UZDUOTIS 2.1
// Monikos objektui priskirti reiksmes: Monika, 155
// Tado objektui priskirti reiksmes: Tadas, 180
// Kesto objektui priskirti reiksmes: Kestas, 179

// UZDUOTIS 2.2
// Atspausdinti MONIKOS, TADO varda ir ugi
// paleisti f-ja 'einu()'


class Zmogus {
    public $ugis = -1;
    public $name = "Bevardis";

    public function  einu() {
        echo "Einu einu...";
    }
}

$Moteris = new Zmogus();
$Vyras1 = new Zmogus();
$Vyras2 = new Zmogus();

$Moteris->name = "Monika";
$Moteris->ugis = 155;
echo "vardas yra:  $Moteris->name    <br /> ";
echo "ugis yra:  $Moteris->ugis    <br /> ";

$Vyras1->name = "Tadas";
$Vyras1->ugis = 180;
echo "vardas yra:  $Vyras1->name    <br /> ";
echo "ugis yra:  $Vyras1->ugis    <br /> ";


//
