<?php
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

class Zmogus {
    private $ugis = 0;
    private $vardas = "Ivesti varda";

    function getManoUgis() {
       return $this->ugis;
    }

    function getManoVardas() {
       return $this->vardas;
    }

    function setManoUgis($naujasUgis) {
        $this->ugis = $naujasUgis;
    }

    function setManoVardas($naujasVardas) {
        $this->vardas = $naujasVardas;
    }

}

