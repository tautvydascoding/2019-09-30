<?php
// UZDUOTIS 2
// sukurti klase   'Automobilis'
//   sukurti  f-ja: atidarytiDuris($x)
//  sukurti kintamasis: liukas = true;
//  sukurti kintamasis: pavadinimas = "Audi";

// functions must contain body

include("Pagrindai.php");

class Automobilis extends Pagrindai{
    public $liukas = true;
    public $pavadinimas = "Audi";
    function atidarytiDuris($x){
       echo $x;
    }
    function vaziuoti($x){
        echo $x;
    }
    function sustoti(){
        echo "okei";
    }

}