<?php
class Zmogus {
    // public $ugis = -1; 
    // public $vardas = 'abc';
    
    private $ugis = -1; 
    private $vardas = 'abc';

    function __construct($u = -11, $v = "abcd") {
        $this->ugis = $u;
        $this->vardas = $v;
    }


    public function einu() {
        echo "einu einu...";
    }

    public function getManoUgis() {
        return $this->ugis;
    }
    public function getManoVardas() {
        return $this->vardas;
    }

    public function setManoUgis($x) {
        $this->ugis = $x;
    }

    public function setManoVardas($x) {
        $this->vardas = $x;
    }
}

// UZDUOTIS 1:
// sukurti  klase: 'zmogus'

// zmogus turi:
// private ugis,
// private vardas
// public f-ja 'getManoUgis()'
// public f-ja 'getManoVardas()'
// public f-ja 'setManoUgis($x)'
// public f-ja 'setManoVardas($x)'
// * kintamojo paemimas f-je:    $this->vardas

// UZDUOTIS 2.1
// susikurti  objektus: Monika

// UZDUOTIS 2.2
// Atspasudinti varda ir ugi naudojant
// f-ja 'manoUgis()'
// f-ja 'manoVardas()'


// UZDUOTIS 3:
// susikurti konstruktoriu

// UZDUOTIS 3.1:
// susikurti  objektus: Monika, Tadas, Jurgis (naudojant konstruktoriu)


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
