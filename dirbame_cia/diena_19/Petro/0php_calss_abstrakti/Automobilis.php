<?php
// UZDUOTIS 2
// sukurti klase   'Automobilis'
//   sukurti  f-ja: atidarytiDuris($x)
//  sukurti kintamasis: liukas = true;
//  sukurti kintamasis: pavadinimas = "Audi";
// UZDUOTIS 2.1
// paveldeti klase:  Pagrindai

// UZDUOTIS 2.2:
// istaisyti klaidas atsiraduses del abstrakcios klases paveldejimo

include_once ("Pagrindai.php");

class Automobilis extends Pagrindai {
    public function atidarytiDuris($x){
        echo "Durys atidarytos";
    }
    public function vaziuoti($x){
        return $y = "greitis: " + $x;
    }
    public function sutoti(){
        echo "Sustojo";
    }
    public $liukas = true;
    public $pavadinimas = "Audi";
}
