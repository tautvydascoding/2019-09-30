<?php

// UZDUOTIS 1:
// sukurti  abstrakcia klase 'Pagrindai'
// kuri turi kintamaji:  ratai = 4
//   sukurti abstrakcia f-ja: vaziuoti($x)
//   sukurti abstrakcia f-ja: sutoti()

// UZDUOTIS 2
// sukurti klase   'Automobilis'
//   sukurti  f-ja: atidarytiDuris($x)
//  sukurti kintamasis: liukas = true;
//  sukurti kintamasis: pavadinimas = "Audi";

include_once ('pagrindai.php');

class Automobilis extends Pagrindai {
  public function atidarytiDuris($x){

  }
  public function vaziuoti($x){

  }
  public function sustoti(){
	}
  public $liukas = true;
  public $pavadinimas = "Audi";
}
// UZDUOTIS 2.1
// paveldeti klase:  Pagrindai

// UZDUOTIS 2.2:
// istaisyti klaidas atsiraduses del abstrakcios klases paveldejimo
