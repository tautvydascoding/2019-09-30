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

class Zmogus
        {
           private $ugis = 'nezinomas';
           private $vardas = 'nezinomas';

           function getManoUgis()
           {
               return $this -> ugis;
           }

            function getManoVardas()
            {
                return $this -> vardas;
            }

            function setManoUgis($x)
            {
              $this->ugis = $x;
            }

            function setManoVardas($x)
            {
                $this->vardas = $x;
            }


        }

