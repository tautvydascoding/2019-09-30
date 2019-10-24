<?php
// UZDUOTIS 2:
// sukurti klase 'A'
// kuri turi kintamaji:  svoris =100
include_once('z.php');
// UZDUOTIS 2.2:
//   klase 'A' turi panaudoti interface 'Z'

class A implements Z {
    public $svoris = 100;
    function setSvoris($x) {
        $this->svoris = $x;
     }
    function getSvoris() {
        return $this->svoris;
    }
}
