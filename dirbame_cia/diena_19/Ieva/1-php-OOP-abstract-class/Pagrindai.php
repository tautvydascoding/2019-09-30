<?php
// UZDUOTIS 1:
// sukurti  abstrakcia klase 'Pagrindai'
// kuri turi kintamaji:  ratai = 4
//   sukurti abstrakcia f-ja: vaziuoti($x)
//   sukurti abstrakcia f-ja: sutoti()

abstract class Pagrindai{
    public $ratai = 4;
    abstract function vaziuoti($x);
    abstract function sustoti();

}