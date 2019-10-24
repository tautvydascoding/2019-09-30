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
//* kintamojo paemimas f-je:    $this->vardas

class ZmogusKonstruktorius
        {
           public $ugis;
           public $vardas;

//function__construct ($ugis = -1 , $vardas = "bevardis")

           function __construct($ugis,$vardas)
           {
               $this->vardas=$vardas;
               $this->ugis=$ugis;
           }


        }

